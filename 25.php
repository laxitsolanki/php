<form method="POST">
	<input type="text" name="n" placeholder="enter no"><br>
	<input type="submit" name="i" value="go"><br>
</form>
<?php
if (isset($_POST['i'])) {
	$n = $_POST['n'];

	for ($i=1;$i<=$n;$i++) { 
		for ($j=1;$j<$i;$j++) { 
			echo $j." ";
		}
		echo "<br>";
	}
echo "<hr>";
	for ($i=1;$i<=$n;$i++) { 
		for ($j=1;$j<$i;$j++) { 
			echo "* ";
		}
		echo "<br>";
	}
}
?>
