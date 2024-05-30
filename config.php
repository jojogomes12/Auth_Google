<?php
session_start();
require_once 'vendor/autoload.php';
Patric\DotEnv\Environment::load(__DIR__);
use Google\Auth\OAuth2;

$clientID = getenv('CLIENT_ID');
$clientSecret = getenv('CLIENT_SECRET');
$redirectUri = 'http://localhost/Auth/callback.php';

$oauth2 = new OAuth2([
    'clientId' => $clientID,
    'clientSecret' => $clientSecret,
    'authorizationUri' => 'https://accounts.google.com/o/oauth2/auth',
    'redirectUri' => $redirectUri,
    'tokenCredentialUri' => 'https://oauth2.googleapis.com/token',
    'scope' => ['email', 'profile'],
]);
?>
