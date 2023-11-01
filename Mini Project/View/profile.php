<?php
session_start(); 
require_once('../controller/session.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" >
        <tr>
            <td colspan="2" align="CENTER">Profile</td>
        </tr>
        <tr>
            <td>ID</td>
            <td><?php echo $id; ?></td>
        </tr>
        <tr>
            <td>NAME</td>
            <td><?php echo $name; ?></td>
        </tr>  
        <tr>
            <td>USER TYPE</td>
            <td><?php echo $userType; ?></td>
        </tr>
        <tr>
            <td colspan="2" align="right">
                <a href="Home.php">Go Home</a>
            </td>
        </tr>
    </table>         
</body>
</html>

