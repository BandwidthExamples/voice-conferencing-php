<?php

//Require Bandwidth SDK
require_once('php-bandwidth/source/Catapult.php');

//Create credentials - best stored in environment variables
$cred = new Catapult\Credentials('BANDWIDTH_USER_ID', 'BANDWIDTH_API_TOKEN', 'BANDWIDTH_API_SECRET');

//Create client object
$client = new Catapult\Client($cred);

//Create a conference object
$conference = new Catapult\Conference(array(
"from" => "+1#########"  //Your Bandwidth number
));

//Sleep to avoid rate limit errors
sleep(1);

//Create an outbound call
$call1 = new Catapult\Call(array(
  "from" => "+1##########", //your Bandwidth number
  "to" => "+1##########", //Conference member number
  "conferenceId" => $conference->id
));

sleep(1);  

//Create another outbound call
$call2 = new Catapult\Call(array(
  "from" => "+1##########",
  "to" => "+1##########",
  "conferenceId" => $conference->id
));

sleep(1);

//Create another outbound call
$call3 = new Catapult\Call(array(
  "from" => "+1##########",
  "to" => "+1##########",
  "conferenceId" => $conference->id
));

sleep(1);

//Now add the calls to the conference as members
$member = $conference->addMember(array(
   "callId" => $call1->id
));

sleep(1);

$member2 = $conference->addMember(array(
   "callId" => $call2->id
));

sleep(1);

$member3 = $conference->addMember(array(
   "callId" => $call3->id
));

?>
