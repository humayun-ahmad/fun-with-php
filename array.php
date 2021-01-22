<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <h4>Array</h4>
    <hr>
    <?php
    $list = array('rahim', 'karim', 'rafiq', 'shoel', 'etc');
    echo "<h4><b>Index array:</b></h4><hr>";

    echo "<pre>";
    foreach($list as $item){
        echo $item." "."<br>";
    }
    echo "</pre>";

    echo "<h4>print_r:</h4><hr>";
    echo "<pre>";
    print_r($list);
    echo "</pre>";

    echo "<h4>for loop:</h4><hr>";
    $length = count($list);

    for($i = 0; $i < $length; $i++){
        echo $list[$i];
        echo "<br>";
    }

    echo "<h4><b>Associative array:</b></h4><hr>";
    $new_list = array('one'=>'rafiq', 'two'=>'karim','halim', 'three'=> 'rahim', 'selim');

    echo "<pre>";
    print_r($new_list);
    echo "</pre>";

    ?>
     <hr>

     
</body>
</html>