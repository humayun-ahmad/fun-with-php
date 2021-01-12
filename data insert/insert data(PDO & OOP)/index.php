<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'phpbasic';


$conn = new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("Database doesn't connect.".$conn->connect_error);
}else{
    echo "done!";
}

$sql = "INSERT INTO information (lastname, firstname, email)
         VALUES('manik', 'Hunter', 'learn@gmail.com')";

if($conn->query($sql) === TRUE){
    echo "Data inserted!";
}else{
    echo "Not inserted";
}

$conn->close();

?>