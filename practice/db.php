<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
	echo "The error is : ".$connection->connect_error;
}else{
	echo "Connection is successful!";
}
?>