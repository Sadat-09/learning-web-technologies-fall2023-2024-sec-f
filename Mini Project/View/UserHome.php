<?php
 session_start();
 $user=$_SESSION['users'];
 $name=$user['name'];
?>


	<h1>Welcome <?php echo $name;?></h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="login.php">Logout</a>