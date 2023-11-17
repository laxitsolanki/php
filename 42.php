<form method="POST">
	<input type="text" name="nm" value="" placeholder="enter name"><br>
	<input type="submit" name="s" value="click me">
</form>
<?php
if(isset($_POST['s']))
{
	$n = $_POST['nm'];
	echo strtoupper($n);
	echo "<br>".strtolower($n);
	echo "<br>".ucfirst($n); // convert first character to caital
	echo "<br>".ucwords($n); // converting after space words to capital letter
}
?>