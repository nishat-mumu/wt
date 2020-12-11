<?php
	include('../Valid/RegistrationCheck.php');
	include('../Valid/Registerinsert.php');

	if(isset($_SESSION['name']))
	{
	header('Location: FormSuccessfull.php');
	}
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="">
	
					<legend><h3>REGISTRATION</h3></legend>
					Id<br/><input type="text" name="id"><?php echo $userIdError;?><br/>
				
					User Name<br/><input type="text" name ="name"><?php echo $nameError;?><?php echo $nameValid ;?><br/>
					
					Password<br/><input type="password" name ="password"><?php echo $passError;?><br/>
                    																				 
					Confirm Password<br/><input type ="password" name ="cpassword"><?php echo $cPassError;?><br/>
					
					Email<br/><input type="text" name ="email"><?php echo $emailErr;?><br/>
		
					DOB<br/><input type="date" name="dob"><?php echo $dobError;?><br/>
					<input type="submit" name="submit" value="Sign Up">

					<?php  echo $error; ?>
			
</form>
</center>
</body>
</html>		






		