<?php

require __DIR__ . '/../vendor/autoload.php';

Dotenv\Dotenv::createUnsafeImmutable(__DIR__ . '/..' . '')->load();

use BRI\InfoRekening\InfoRekening;

$clientId = $_ENV['CLIENT_KEY']; // customer key
$clientSecret = $_ENV['CLIENT_SECRET']; // customer secret
$pKeyId = $_ENV['PRIVATE_KEY']; // private key
$account = '111231271284142'; // account number
$partnerId = 'feedloop'; //partner id
$baseUrl = 'https://sandbox.partner.api.bri.co.id'; //base url
$path = '/snap/v1.0/balance-inquiry'; //informasi rekening api path
$accessTokenPath = '/snap/v1.0/access-token/b2b'; //access token path

echo (new InfoRekening())->getInfoRekening(
  $account,
  $clientId,
  $clientSecret,
  $pKeyId,
  $partnerId,
  $baseUrl,
  $path,
  $accessTokenPath
);
