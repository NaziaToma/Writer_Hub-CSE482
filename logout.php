<?php

include('config.php');
$google_client->revokeToken();
session_start();

session_destroy();
header('location:index.php');
?>