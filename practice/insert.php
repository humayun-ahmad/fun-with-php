<<?php 
require_once("db.php");

// $sql = "CREATE TABLE demo_practice_01(
// 		first_name varchar(50),
// 		last_name varchar(50),
// 		email varchar(50))";


$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

echo $first_name;



$sql = "INSERT INTO demo_practice_01 (first_name, last_name, email) VALUE ('$first_name', '$last_name', '$email')";


// // $result = mysqli_query($connection, $sql) or die("this is insert file: ".mysqli_error($connection));
$result = mysqli_query($connection, $sql) or die("this is insert file: ".mysqli_error($connection));

if($result){
	header("location: all_contact.php");
}else{
	echo "Data not inserted!";
}

?>