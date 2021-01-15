<?php
require_once("../data insert/form data/db.php");
$id = $_GET['id'];

$sql = "DELETE From information WHERE id=$id";
if(mysqli_query($conn, $sql)){
    header("location: all_contact.php");
}else{
    echo "Data Delete unsuccessful!";
}

?>