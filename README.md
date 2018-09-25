<div align="center">

# Simple Conference Call - Inbound/Outbound

<a href="http://dev.bandwidth.com"><img src="https://s3.amazonaws.com/bwdemos/BW_Voice.png"/></a>
</div>

Short example PHP scripts that show how to establish a conference call with both inbound/outbound calls.

## Table of Contents

* [Prereqs](#prereqs)
* [How It Works](#how-it-works)
* [Deploy](#deploy)

## Prereqs

* Get the bandwidth php sdk [here](https://dev.bandwidth.com/php.html)
* PHP 5.3 or greater
* Bandwidth phone number and api [credentials](https://dev.bandwidth.com/getStarted.php)

## How It Works

These example scripts establish a conference call from either inbound calls or outbound calls.  The inbound example requires a web server listening for callbacks from Bandwidth as incoming calls will arrive as POST events.  The outbound example can be executed from the command line, the inbound example can be executed using PHP's built in test server and a tunnel tool like [ngrok](https://www.ngrok.io).      

## Deploy

Message stating you can deploy this app to heroku. Click the button below for more information.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)
