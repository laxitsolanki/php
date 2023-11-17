<?php
//list--assign variables as if they were an array
$info = array('coffee','brown','caffeine');
//listing all the variable
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it secial.";
?>
<?php
//is_array--finds whether a variable is an array
$yes = array('this','is','an array');
if (is_array($yes))
 {
	echo "<br>array is worked";
}
else
{
	echo "<br>this is not array";
}
echo is_array($yes) ? '<br>array' : 'not an array';
$no ='this is a string';
echo is_array($no) ? 'array' : '<br>not an array';
?>
<hr>
<hr>
<?php
//count--count element in an array,or properties in an objection
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
$result = count($a);//$result ==3
echo "<br>".$result;

$b = array(2,3,4,90,12);
$result = count($b);//$result ==3
echo "<br>".$result;

$result = count(mull); //$result ==0
echo "<br>".$result;
?>
<hr>
<hr>
<?php
//sort--sort an array, ascending order
$fruits = array("d"=>"lemon", "a"=>"orange","b"=>"banana","c"=>"apple");
asort($fruits);
foreach ($fruits as $key => $val)
 {
	echo "<br> #key = $val <br>";
}
?>
<hr>
<hr>
<?php
//rsort == sort an array in reverse order
$fruits = array("lemon","orange","banana","apple");
rsort($fruits);
foreach ($fruits as $key => $val)
 {
	echo "$key = $val <br>";
}
?>
<hr>
<hr>
<?php
//array_pop --pop the element off the and of array
$stack = array("orange","banana","apple","raspberry");
print_r($stack);

echo "<br>";
array_pop($stack);
print_r($stack);

echo "<br>";
array_pop($stack);
print_r($stack);
?>
<hr>
<hr>
<?php
//array_push()--insert last elements of array
$stack = array("orange","banana");
echo "<br>";
array_push($stack, "apple");
print_r($stack);
echo "<br>";
array_push($stack,"laxit");
print_r($stack);
?>