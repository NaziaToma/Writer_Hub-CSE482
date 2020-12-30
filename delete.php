<?php

include 'dbcon.php';

$id = $_GET['id'];
$deletequrey = "delete from registration where id=$id";

$query = mysqli_query($con,$deletequrey);

header('location:manage_user.php');
?>