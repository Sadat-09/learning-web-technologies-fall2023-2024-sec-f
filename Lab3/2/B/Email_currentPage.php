





<html lang="en">
<head>
    <title>Lab 2 Form</title>
</head>

<body>
    
        <fieldset>
       
         <legend>Email</legend>
         <form method="post" action="" enctype="">
                    <b>Email</b><br>
                    <input type="text" name="email" value="" />
                    <br>
                    <input type="submit" name="submit" value="submit" /><br>
                   
                    


              



     </form>

        </fieldset>








</body>
</html>

<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    echo " Email:  " . $email;
}
?>