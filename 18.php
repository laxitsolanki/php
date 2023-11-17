<form method=POST>
	<input type="text" name="a" value="" placeholder="enetr no1"><br>
	<input type="text" name="b" value="" placeholder="enetr no2"><br>
	<input type="submit" name="s" value="ADD (+)">
	<input type="submit" name="sub" value="SUB (-)">
	<input type="submit" name="m" value="MUL (*)">
	<input type="submit" name="sm" value="sm (/)">
</form>
	
		<?php
		if (isset($_POST['s'])) 
		{
			$a = $_POST['a'];
			$b = $_POST['b'];
			$c = $a+$b;
			echo "addition is :)".$c;
		}
if (isset($_POST['add'])) 
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $a+$b;
	echo "addition is :)".$c;
}

if (isset($_POST['sub'])) 
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $a-$b;
	echo "sub is :)".$c;
}

if (isset($_POST['m'])) 
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $a*$b;
	echo "maultiplication is :)".$c;
}

if (isset($_POST['sm'])) 
{
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $a/$b;
	echo "sam is :)".$c;
}
?>