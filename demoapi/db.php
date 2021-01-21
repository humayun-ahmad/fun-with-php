<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "demoapi";

$connection = new mysqli($servername, $username, $password, $dbname);

if($connection->connect_error){
	echo "Error having";
}


 ?>