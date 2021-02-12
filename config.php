<?php

//start session on web page


//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1057429061185-9n8r54ihr9mmvn3uj0oejt5udrheu182.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('mrCcGxcyWObRbibZ1IakL5Zd');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/Writer_Hub-CSE482/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> 
