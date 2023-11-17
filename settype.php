<?php
$foo = "5bar"; //string
settype($foo, "integer"); // $foo is now 5 (integer)
echo "$foo";

//strval --get string value of a variable
$var ='122.34343jaymajaji';
echo "<br>string value:". strval($var);

//intval --get the integer value of a variable
echo "<br>integer value:".intval($var)."<br>";
echo "<br>float value:".floatval($var)."<br>";
?>