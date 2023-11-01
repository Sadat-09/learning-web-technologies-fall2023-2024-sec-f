<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
<form method="post" action="../controller/registrationCheck.php">
		<table border="1" >
			      <tr>
				    <td>
					<fieldset>
						<legend><h3>REGISTRATION</h3></legend>
						Id<br/>
                        <input type="text" name="id"><br/>
						Password<br/>
                        <input type="password" name="password"><br/>
						Confirm Password<br/>
                        <input type="password" name="confirm_password"><br/>
						Name<br/>
                        <input type="text" name="name"><br/>
						User Type<br/>
						<input type="radio" name="useType" value="User"/>User
						<input type="radio" name="userType" value="Admin"/>Admin
						<hr/>
						<input type="submit" name="submit" value="Sign Up">
						<a href="../view/login.php">Sign In</a>
					</fieldset>
				     </td>
			       </tr>                                
		         </table>
	          </form>
    
         </body>
</html>