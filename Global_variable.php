<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supper Global Variable</title>
</head>
<body>

    <h4>$GLOBALS Variable</h4>
    <?php

   
    $a = 10;
    $b = 20;
    echo $a + $b . "<br>";
    function learn(){
       $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
    }
    learn();
    echo $c."<br>";
    ?>

<h4>$_SERVER Variable</h4>
    <?php
    echo "<b>PHP SELF : </b>".$_SERVER['PHP_SELF']."<br>";
    echo "<b>SERVER_ADDR : </b>".$_SERVER['SERVER_ADDR']."<br>";
    echo "<b>SERVER_Name : </b>".$_SERVER['SERVER_NAME']."<br>";
    echo "<b>SCRIP_Name : </b>".$_SERVER['SCRIPT_NAME']."<br>";
    echo "<b>HTTP_USER_AGENT : </b>".$_SERVER['HTTP_USER_AGENT']."<br>";
    echo "<b>REQUEST_URI : </b>".$_SERVER['REQUEST_URI']."<br>";
    echo "<b>SERVER_SOFTWARE : </b>".$_SERVER['SERVER_SOFTWARE']."<br>";
    echo "<b>SERVER_ADMIN : </b>".$_SERVER['SERVER_ADMIN']."<br>";
    echo "<b>SERVER_ADDR : </b>".$_SERVER['SERVER_NAME']."<br>";
    echo "<b>REQUEST METHOD : </b>".$_SERVER['REQUEST_METHOD']."<br>";

    ?>
</body>
</html>