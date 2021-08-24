<!DOCTYPE html>
<html>
<body>

<?php
$str = "UPI\11770918";

if (str_contains($str, "\'")) {
	$result = str_replace("\'","~",$str);
	echo "str_replace : $result <br>";

	$result = substr_replace($result, PHP_EOL . "117" ,strpos($result, "~")+strlen("~"),0);
   	echo $result;
}else{
	echo "No";
}


?>

</body>
</html>

