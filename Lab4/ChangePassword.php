<?php 
    $newpassword=$_POST['NewPassword'];
    $currentpassword=$_POST['CurrentPassword'];
    $retype=$_POST['RetypedPassword'];

    if($newpassword==$currentpassword){
        echo "Type New Password";

    }
    if($newpassword!=$retype){
        echo "Do it Again";

    }

?>