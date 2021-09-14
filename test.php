<?php 
require_once 'vendor/autoload.php';

$id_token = filter_input(INPUT_POST, 'id_token');
define('CLIENT_ID', '40747938598-6v8e5kl6uiof04c94vssvg5uvh82s1kh.apps.googleusercontent.com');

$client = new Google_Client(['client_id' => CLIENT_ID]); 
$payload = $client->verifyIdToken($id_token);
if ($payload) {
  $userid = $payload['sub'];
}
$_SESSION['login'] = true;
exit;