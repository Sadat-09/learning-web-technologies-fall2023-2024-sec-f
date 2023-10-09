

<?php
$email='';

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    echo " Email:  " . $email;
}
?>



<html lang="en">
<head>
    <title>Email</title>
</head>

<body>
    
        <fieldset>
       
         <legend>Email</legend>
         <form method="post" action="" enctype="">
                    <b>Email</b><br>
                    <input type="text" value="<?php echo $email ?>" name="email"  />
                    <br>
                    <input type="submit" name="submit" value="submit" /><br>
                   
                    


              



     </form>

        </fieldset>








</body>
</html>

