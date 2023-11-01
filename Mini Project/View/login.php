<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="../controller/loginCheck.php">
		<table border="1" >
			<tr>
				<td>
					<fieldset>
						<legend><h3>LOGIN</h3></legend>
						User Id<br/>
						<input type="text" name="userId"><br/>
						Password<br/>
						<input type="password" name="password"><br /><hr/>
						<input type="submit" name="submit" value="Login">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
    
</body>
</html>