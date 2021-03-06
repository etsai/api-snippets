<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library

use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";

$client = new Client($sid, $token);

$number = $client->lookups
    ->phoneNumbers("+14157012311")
    ->fetch(
        array("type" => "caller-name")
    );

echo $number->callerName['caller_type'] . "\r\n";
echo $number->callerName['caller_name'];
