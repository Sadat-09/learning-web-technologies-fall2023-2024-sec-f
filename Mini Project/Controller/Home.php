<?php
session_start();
$user = $_SESSION['users'];
$userType = $user['user_type'];
$name=$user['name'];

if ($userType == 'Admin') {
    header('Location: ../view/adminHome.php'); 
    exit();
} else {
    header('Location: ../view/userHome.php'); 
    exit();
}
?>