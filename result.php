<?php
	$c = mysqli_connect("localhost","root","","shop");
	$d = $_GET['q']; //apple

?>
<?php //getting a Data order wise:Accending or Descending(order By)

	$s = mysqli_query($c,"select * from product where category='$d'");//accending

	echo "<table border=1>";

	while($r = mysqli_fetch_array($s))
	{
		echo "<tr><td>".$r['subcategory']."</td>";
	}
	echo "</table>";
?>