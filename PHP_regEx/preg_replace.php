<?php 
/*****************************************************
 * $replaced_str = preg_replace($pattern, $partial_replacement_str, $input_str)
 * 
 * 
 *****************************************************/

$regex = "/([a-zA-Z]+) (\d+)/";
$new_string = preg_replace($regex, "$2 of $1", "June 24");

// This prints "24 of June"
echo $new_string;

echo "<br><br>";
$str = 'Visit Microsoft!';
$pattern = '/microsoft/i';
echo preg_replace($pattern, 'W3Schools', $str);


 ?>