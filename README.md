<div align="center">

# Simple Conference Call - Outbound

<a href="http://dev.bandwidth.com"><img src="https://s3.amazonaws.com/bwdemos/BW_Voice.png"/></a>
</div>

This is a short example PHP script that shows how to establish a conference call with outbound calls.

## Table of Contents

* [Prereqs](#prereqs)
* [How It Works](#how-it-works)
* [Deploy](#deploy)

## Prereqs

* Get the bandwidth php sdk [here](https://dev.bandwidth.com/php.html)
* PHP 5.3 or greater
* Bandwidth phone number and api [credentials](https://dev.bandwidth.com/getStarted.php)

## How It Works

This script creates a bandwidth client with the given credentials, then it creates a conference and creates three outbound call which are added as members to the conference.  If you run this script, all three callers should be placed into the conference call and hear each other when speaking. 

## Deploy

Message stating you can deploy this app to heroku. Click the button below for more information.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy)
