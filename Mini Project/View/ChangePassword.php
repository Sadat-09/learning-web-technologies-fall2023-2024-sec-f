<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="" action="../controller/passwordCheck.php">
        <table border="1" >
            <tr>
                <td>
                    <fieldset>
                        <legend>CHANGE PASSWORD</legend>
                        Current Password<br />
                        <input type="password" name="CurrentPassword" /><br />
                        New Password<br />
                        <input type="password" name="NewPassword" /><br />
                        Retype New Password<br />
                        <input type="password" name="ConfirmPassword" />								
                        <hr />
                        <input type="submit" name="submit" value="changepassword">   
                        <a href="../controller/Home.php">Home</a>						
                    </fieldset>
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>