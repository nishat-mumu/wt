<?php
include ('../Db connection/db.php');
$id = $_GET['id'];



$connection = new db();
		
$conobj=$connection->OpenCon();


$sql = db::deleteInfo($conobj,$id);



	if ($sql === TRUE) {
		echo "DELETED SUCCESSFULLY";
		header('Location:../Design/ShowInfo.php');
		}
		else {
		echo "Error Deleting record: " ;
		}



?>