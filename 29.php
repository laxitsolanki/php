<form method="POST">
	<input type="text" name="n" placeholder="enter no"><br>
	<input type="submit" name="s" value="go"><br>
</form>
<?php
if(isset($_POST['s'])){
	$a = $_POST['n'];
	$i=1;
	while ($i<=$a) {
		echo "number ".$i."<br>";
		$i++;
	} 
}
?>