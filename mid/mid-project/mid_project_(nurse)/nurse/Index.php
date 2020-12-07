<?php
session_start();
?>

<html>
<head></head>
<title>Login</title>
<body>

<center>
<form method="post" action="valid/LoginCheck.php">
	
					<legend><h3>LOGIN</h3></legend>
					User Id<br/>
					<input type="text" name="id"><br/>                               
					Password<br/>
					<input type="password" name="password">
					<br><br>
					<input type="submit" value="Login" name="submit">
					<a href="design/registration.php">Register</a><br>
				
</form>
</center>
</body>
</html>