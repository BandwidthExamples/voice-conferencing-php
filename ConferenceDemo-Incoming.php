<?php

/* 
 * This script can be run using PHP's test server using th command:
 * php -S localhost:5000
 *
 * When a call is placed to the Bandwidth Number, a conference will 
 * be created, its id save to cfile.txt, and the call will be added 
 * as a conference member.  Subsequent calls will be added as members 
 * provided the cfile.txt file contains a valid conference id.
 *
 */

//uncomment to dump the incoming POST data to the console
//$entityBody = file_get_contents('php://input');
//file_put_contents("php://stdout", $entityBody);

//Get an array from incoming POST data
$_POST = json_decode(file_get_contents('php://input'), true);

//Require Bandwidth SDK
require_once('php-bandwidth/source/Catapult.php');

//Create credentials
$cred = new Catapult\Credentials('BANDWIDTH_USER_ID', 'BANDWIDTH_API_TOKEN', 'BANDWIDTH_API_SECRET');

//Create client object
$client = new Catapult\Client($cred);

//Check if the POST is an answer event.
if($_POST['eventType']=="answer"){

    //If cfile exists, add call as member, if not create a conference then add as member
    if(file_exists("cfile.txt")) { 
        
        //Fetch the conference id from cfile.txt
        $myfile = fopen("cfile.txt", "r") or die("Unable to open file!");
        $cid = fgets($myfile);
        fclose($myfile);
        
        //Get conference by id
        $conference = new Catapult\Conference($cid);

        //Add call as member
        $member = $conference->addMember(array(
            "callId" => $_POST['callId']
        ));

    } else {
        
        //Create conference using Bandwidth Number
        $conference = new Catapult\Conference(array(
            "from" => "+1##########"  //Your Bandwidth number
        ));

        //Save conference id to file for later use on subsequent calls
        $myfile = fopen("cfile.txt", "w") or die("Unable to open file!");
        fwrite($myfile, $conference->id);
        fclose($myfile);
        
        //Add call as member
        $member = $conference->addMember(array(
            "callId" => $_POST['callId']
        ));
    }
} 
?>
