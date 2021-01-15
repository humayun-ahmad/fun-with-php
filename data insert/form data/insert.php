<?php
require_once("db.php");
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];

$sql = "INSERT INTO information (firstname, lastname, email) VALUE ('$first_name', '$last_name', '$email')";

$result = mysqli_query($conn, $sql) or die("this is insert file: ".mysqli_error($conn));

if($result){
    header("location: ../../data read and show/all_contact.php");
}else{
    echo "Data Not inserted";
}

?>