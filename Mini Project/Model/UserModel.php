<?php
require_once('db.php');

function getuser($userId,$password){
    $con = getConnection();
    $sql = "SELECT * FROM users WHERE id='{$userId}' AND password='{$password}'";
    $result = mysqli_query($con, $sql);

    
    $resultsArray = array(); 
    while ($row = mysqli_fetch_assoc($result)) {

        $resultsArray[] = $row;
    }

   
    mysqli_close($con);

    return $resultsArray;

}





?>