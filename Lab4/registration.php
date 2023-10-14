<?php
$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$ConfirmPassword = $_POST["confirmPassword"];
$gender = $_POST["gender"];
$dob = $_POST["dob"];
$pattern = "/[@#$%]/";
$A="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_";
$N="123456789";
$f=0;
$f2=1;
$fe=0;
$fn=0;

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




for($i=0;$i<strlen($email);$i++){
    if($email[i]=='@'){
        $fe=1;
    }

}
if($fe==0){
    echo "Email should contain @";
}







for($i=0;$i<strlen($username);$i++){
    for($j=0;$j<strlen($A);$j++){
        if($username[$i]!=$A[$j]){
            $f2=0;
        }
   
    }
}
if($f2==0){
    echo "Invalid Username";
}

 if(strlen($username)<2){
    echo "Please Enter atleast  2 characters ";

}
 if(strlen($username)<8){
    echo "Please Enter atleast  8 characters ";

}




for($i=0;$i<strlen($password);$i++){
    for($j=0;$j<strlen($pattern);$j++){
        if($password[$i]==$pattern[$j]){
            $f=1;
        }
   
    }
}
if($f==0){
    echo "Password must contain at least one of the special characters (@, #, $, %)";
}
 if($password!=$ConfirmPassword){
    echo "Type same passwords";
 }


 if(isset($_POST['gender'])){
    echo "please select gender";
 }
 if(isset($_POST['dob'])){
    echo "please select Date of Birth";
 }










?>