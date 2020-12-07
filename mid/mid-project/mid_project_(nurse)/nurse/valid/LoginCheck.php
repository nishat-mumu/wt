<?php


if(isset($_REQUEST['submit'])){
	$id = $_REQUEST['id'];
	$password = $_REQUEST['password'];
	$myfile = fopen("../design/registrationfile.txt", "r");
	$readfile = fread($myfile, filesize("../design/registrationfile.txt"));
	$user_info = explode("|", $readfile);
	if(empty($id) || empty($password)){


		header('location: ../Index.php?msg=null');
	}else{


		if($user_info[2] == $id and $user_info[3] == $password){
			session_start();
			$_SESSION['id'] = $id;
			header('location:../design/Nhome.php');
			
			
		
	}else{
		header('location: ../design/Index.php?msg=invalid');
	}
}
}else{
	header('location: ../design/Index.php');
}


?>