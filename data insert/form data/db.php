<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpbasic';

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Database connection error!");
}else{
    echo "Database connection successful!";
}


?>