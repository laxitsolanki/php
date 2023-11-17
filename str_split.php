<?php
echo "<h3>star_slit</h3>";
//str_split:convert a string to an array
$str = "hrllo friend";
$arr1 = str_split($str);
$arr2 = str_split($str, 3);
print_r($arr1);
echo "<br>";
print_r($arr2);
?>
<hr>
<?php
//str_shufffle -randomly shuffles a string ,same as random function
echo "<br>";
$str = "bca bscit";
echo "str_shuffle($str)";
?>
<hr>
<?php
echo "<br><h3>strpbrk</3>";
//strbrk:search a string for any of a set of charactors
$text = 'rial pandya.';
echo strpbrk($text, 'p'); //output : pal pandya
echo "<br>";
echo strpbrk($text,'y'); //outut :ya
?>
<hr>
<?php
echo "<h3>substr_compare</h3>";
//substr_compare:binary safe comarison of two string from an offset ,up to length charaters
echo substr_compare("abcde", "bc", 1, 2); //0
echo "<br>".substr_compare("abcde", "de", -2, 2);//0
echo "<br>".substr_compare("abcde", "bcg", 1, 2);//0
echo "<br>".substr_compare("abcde", "Bc", 1 , 2, truue);//0
echo "<br>".substr_compare("abcde", "bc", 1, 3);//1
echo "<br>".substr_compare("abcde", "cd", 1, 2);//-1
echo "<br>".substr_compare("abcde", "abc", 5, 1);//waring
?> 




