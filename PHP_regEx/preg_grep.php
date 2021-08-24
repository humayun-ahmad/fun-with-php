<?php
/* 
Syntax: preg_grep(pattern, input, flags)

flags	Optional. There is only one flag for this function. Passing the constant PREG_GREP_INVERT will make the function return only items that do not match the pattern.

*/


$input = [
  "Red",
  "Pink",
  "Green",
  "Blue",
  "Purple"
];

$result = preg_grep("/^p/i", $input);
print_r($result);

echo nl2br("\n\n");
// After using flag param

$result = preg_grep("/^p/i", $input, PREG_GREP_INVERT);
print_r($result);

?>