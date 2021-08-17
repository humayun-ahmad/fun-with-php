<?php
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