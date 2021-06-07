<?php 

require_once '../vendor/autoload.php';

$google_client = new Google_client();
$google_client ->setAuthConfig('../controller/APIclient.json');
$google_client->setRedirectUri('http://localhost/percobaan_uts/MVC/controller/proses.php?aksi=google');
$google_client-> addScope('email');
$google_client->addScope('profile');
$google_client->addScope('https://www.googleapis.com/auth/user.birthday.read');

session_start();

?>