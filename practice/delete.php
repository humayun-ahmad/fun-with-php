<?php 
	require_once("db.php");
	$id = $_GET['id'];

	$sql = "DELETE FROM demo_practice_01 WHERE id=$id";

	$result = mysqli_query($connection, $sql);

	if($result){
		header("location: all_contact.php");
	}else{
		echo "DATA NOT DELETED!!";
	}

 ?>