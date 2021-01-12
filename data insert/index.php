<?php
$connt = mysqli_connect('localhost', 'root', '', 'phpbasic');
if($connt == false){
    die("Database doesn't connect.".mysqli_connect_error());
}else{
    echo "done!";
}

$sql = "INSERT INTO information (lastname, firstname, email)
         VALUES('Learn', 'Hunter', 'learn@gmail.com')";

if(mysqli_query($connt, $sql)){
    echo "data inserted successfully";
}
else{
    echo " data insertion failed".mysqli_error($connt);
}

mysqli_close($connt);

?>