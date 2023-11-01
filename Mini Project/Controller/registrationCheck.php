<?php


if (isset($_POST['submit'])) {
    

   
    $id = $_POST['id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $name = $_POST['name'];
    $fn=0;

    if (isset($_POST['useType'])) {
        $userType = $_POST['userType'];
    } else {
        $userType = '';
    }


   

for($i=0;$i<starlen($name);$i++){
    for($j=0;$j<strlen($N);$j++){
        if($name[$i]==$N[$j]){
            $fn=1;
        }
   
    }

}
if($fn==1){
    echo "Name cant contain number";
}

    if ($id == "" || $password == "" || $confirm_password == "" || $name == "") {
        echo "Please fill in all fields.";
    } 
    if ($password != $confirm_password) {
        echo "Passwords do not match.";
    } 
    if(strlen($name)<2){
        echo "Please Enter atleast  2 characters ";
    
    }
     if(strlen($name)<8){
        echo "Please Enter atleast  8 characters ";
    
    }
    
    
   
}
?>