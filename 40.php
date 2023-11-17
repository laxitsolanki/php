<?php
function sum($x,$y)
{
	$z = $x+$y;
	return $z; //return value
}
?>
<form method="POST">
	<input type="text" name="n1" placeholder="enetr no1"><br>
	<input type="text" name="n2" placeholder="enetr no2"><br>
	<input type="submit" name="s" placeholder="addition"><br>
</form>
<?php
if (isset($_POST['s'])) {
	echo sum ($_POST['n1'],$_POST['n2']); //argument
}
?>