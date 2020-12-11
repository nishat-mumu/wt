<?php

session_start(); 
if (empty($_SESSION['name']) || empty($_SESSION['email'])|| empty( $_SESSION['password']) || empty($_SESSION['cpassword'])  || empty($_SESSION['id']))
{
header("Location: Registration.php");
}




?>


<!DOCTYPE html>
<html>
<body>


<center>
		 <h2>You are Successfully Registered <?php echo $_SESSION["name"];?></h2>
		 <h3>for login <a href="../Valid/Logout.php">click here</a></h3>
 </center>
</body>
</html>

<?php


?>   
