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
    echo $_SERVER['PHP_SELF']."<br>";
    echo "<b>SERVER_ADDR : </b>".$_SERVER['SERVER_ADDR']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SCRIPT_NAME']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";
    echo $_SERVER['SERVER_NAME']."<br>";

    ?>
</body>
</html>