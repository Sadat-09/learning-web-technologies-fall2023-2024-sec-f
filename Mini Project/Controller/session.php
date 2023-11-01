<?php
session_start();
$user=$_SESSION['users'];
$id=$user['id'];
$name=$user['name'];
$userType=$user['user_type'];
$password=$user['password'];

?>