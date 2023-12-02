<?php
require_once('../model/AdminModel.php');

if (isset($_POST['submit'])) {

    if (isset($_POST['empName']) && isset($_POST['contactNo']) && isset($_POST['userName']) && isset($_POST['password']))
    {
        
        $empName = $_POST['empName'];
        $contactNo = $_POST['contactNo'];
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        AddEmployee($empName,$userName, $contactNo,  $password);
    }
} else {
    echo 'Invlaid';
}

?>