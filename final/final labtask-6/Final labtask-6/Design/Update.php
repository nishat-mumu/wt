<?php
    global $id;
   $id	= $_GET['id'];
	include('../Valid/UpdateCheck.php');
	
?>

<html>

<head></head>
<body>
<center>
<form method ="post" action="">
	
					<legend><h3>Update Info</h3></legend>
					User Name<br/><input type="text" name ="name"><br/>
					
					Email<br/><input type="text" name ="email"><br/>
					
					DOB<br/><input type="date" name="dob"><br/>
					<input type="submit" name="submit" value="Update">
					
					<?php  echo $error; ?>
			
</form>
</center>
</body>
</html>		






		