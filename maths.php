<?php
	print "<h2>";
	//abs means absolute (positive)
	print "abc(-65,45) = ".abs(-65.45);
	print "<br>".abs(-23);
	print "<br>cell(12,45) = ".ceil(10.1);
	print "<br>".ceil(100.99);
	print "<br>floor(12,95) = ".floor(-12.95);
	print "<br>".floor(-23.1);
	print "<br>round(12,4567) = ".round(12.567);
	print "<br>round(12.4567) = ".round(12.4567,2);
	print "<br>fmod(23,4) = ".fmod(23,4);
	print "<br>".fmod(25,4);
	print "<br>min(15,2,-5,0,32) = ".min(15,2,-5,0,32);
	print "<br>max(15,2,-5,0,32) = ".max(15,2,-5,0,32);
	print "<br>pow(2,3) = ".sqrt(16);
	print "<br> ".pow(4,3);
	print "<br>sqrt(16) = ".sqrt(16);
	print "<br>rand() = ".rand();
	print "<br>rand() = ".rand(700,10000);
	print "</h2>";
?>