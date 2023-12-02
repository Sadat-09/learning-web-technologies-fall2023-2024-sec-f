<?php
require_once('db.php');

function AddEmployee($empName,$username,$contractNo,$Password){
    $con = getConnection();
    $sql = "INSERT INTO employees (name,username,contract,password)VALUES ('$empName','$username', '$contractNo','$Password')";
    
    $result = mysqli_query($con, $sql);
    return;
  
    
    

}

?>