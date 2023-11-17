<?php
	print "<h2>";

	print "date() =".date("d-m-y")."<br>";
	print "<br>getdate() = <br>";
	print_r(getdate());

	$dt = getdate();

	print "<br>getmonth:<br>".$dt["month"];

	echo "<br>".$dt['seconds'];

	print "<br>checkdate(10,14,2010) = ".checkdate(10,14,2010);

	print "<br>checkdate(2,29,2011) = ".checkdate(2,29,2011);

	$today = mktime(17,25,45,10,14,2010);
	print "<br>mktime(17,25,45,10,14,2010) = ".$today;

	print "</h2>";
?>