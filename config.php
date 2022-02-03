<?php

//start session on web page

// config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('746291461071-nvoqvoe0k9vqf7k6vhoo76tt7ft07coq.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/my%20folders/office2/ecorik/ecorik/default/signup.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
