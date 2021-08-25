<!DOCTYPE html>
<html>
<body>

<?php
$input = [
  "It is 5 o'clock",
  "40 days",
  "No numbers here",
  "In the year 2000"
];

/* 
    Syntax:
    preg_filter(pattern, replacement, input, limit, count)

    Here "limit" and "count" optional.

    Replacement strings may contain backreferences in the form \n or $n where n is the index of a group in the pattern. In the returned string, instances of \n and $n will be replaced with the substring that was matched by the group or, if \0 or $0 are used, by the whole expression.
*/

$result = preg_filter('/[0-9]+/', '\0', $input);
print_r($result);
?>

</body>
</html>
