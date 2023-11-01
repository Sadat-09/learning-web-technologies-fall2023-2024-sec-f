<?php
require_once("../model/UserModel.php");

session_start();

if (isset($_POST['submit'])) {
    $userId = $_POST['userId'];
    $password = $_POST['password'];

    $userData = getuser($userId, $password);

    if ($userData != false) {
        $_SESSION['users'] = $userData; 

        if ($userData['user_type'] === 'Admin') {
        
            header('Location: ../view/adminHome.php');
            exit();
        } else {
            
            header('Location: ../view/userHome.php');
            exit();
        }
    } 
    else {
        echo " Please try again .";
    }
}

?>