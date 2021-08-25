<?php 
/**
 * $has_matches = preg_match_all($pattern, $input_str, $matches_out)
 * 
 * 
 * */

// 1. problem

// a string with numerous dates
$pattern = "/[a-zA-Z]+ (\d+)/";
$input_str = "June 24, August 13, and December 30";
if (preg_match_all($pattern, $input_str, $matches_out)) {
    

    // This will print "2" because we are capturing only one group
    echo "matches_out ".count($matches_out);
    echo "<br>";


    // This will print "3" for the three dates in our input string
    echo "matches_out[0] ".count($matches_out[0]);
	echo "<br>";

    // $matches_out[0] is an Array of the matched strings from the
    // input string.

    // This prints an Array ("June 24", "August 13", "December 30")
    print_r($matches_out[0]);
    echo "<br>";
    // $matches_out[1], $matches_out[2], etc. are Arrays filled with
    // the captured data in the same order as in the regex pattern.

    // This prints an Array ("24", "13", "30")
    print_r($matches_out[1]);
    echo "<br>";
    
}

// 2. problem

$str = "color and colours are not different, this two english word are right.colo";

$pattern = "/colou?r?s?/i";

preg_match_all($pattern,$str,$output);

print_r($output);





 ?>