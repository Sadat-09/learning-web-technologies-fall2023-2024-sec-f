<?php 
$username=$_POST['username'];
$password=$_POST['password'];
$pattern = "/[@#$%]/";
$A="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789.-_";
$f=0;
$f2=1;



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









?>