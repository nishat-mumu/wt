<?php
	include('../valid/RegistrationCheck.php');
	session_start();
	$error="";
		
    if(isset($_REQUEST['submit'])){	
		
        if(!empty($_REQUEST['name']) && !empty($_REQUEST['password']) && !empty($_REQUEST['cpassword']) && !empty($_REQUEST['gender']) && !empty($_REQUEST['phone']) && !empty($_REQUEST['email'])  &&  !empty($_REQUEST['id'])){
			if($pass == $cPass){
			
				
            $info = $_REQUEST['name']."|". $_REQUEST['email']."|".$_REQUEST['id']."|".$_REQUEST['password']. "|".$_REQUEST['cpassword']."|".$_REQUEST['phone']."\n";
            $myfile = fopen("registrationfile.txt", "w");
            fwrite($myfile, $info);
            fclose($myfile);
            echo "Registration successfully done!";   
        }
        
		}
        else{
            $error = "Check and fill up the all field!";
            
        }
		
    
		
		
	}
?>

<html>

<head></head>
<title>Registration</title>
<body>
<center>
<form method ="post" action="">
					<h3>REGISTRATION</h3>
					Name :<input type="text" name ="name"><?php echo $nameError;?><?php echo $nameValid ;?><br/><br>
					Email :<input type="text" name ="email"><?php echo $emailErr;?><br/><br>
					Id :<input type="text" name="id"><?php echo $userIdError;?><br/><br>
					Password :<input type="password" name ="password"><?php echo $passError;
																				echo $validPass?><br/><br>																				 
					Confirm Password :<input type ="password" name ="cpassword"><?php echo $cPassError;?><br/><br>
					Gender :<input type="radio" name="gender" value="Male" >Male<br>
					           <input type="radio" name="gender" value ="Female">Female<br>
					           <input type="radio" name="gender" value ="Others"> Others<?php echo $genderError;?><br/><br>
					phone : <input type="text" name="phone"><?php echo $noError;?><br/><br>
					<input type="submit" name="submit" value="Sign Up">
					<a href="../Index.php">Sign In</a>
					<?php  echo $error; ?>
</form>
</center>
</body>
</html>		






		