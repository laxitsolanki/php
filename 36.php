<?php
	$a = array(1,2,3,8,100);
	print_r($a);
	echo "<hr>";
	echo $a[0]; //single element print
	echo "<font color=red>".$a['4']."</font>";
	echo "<hr>";


	//userdefine array
	$arr[0] = "jay";
	$arr[1] = "kamal";
	$arr['abc'] = "nayan";

	print_r($arr);
	echo "<br>";
	echo $arr['abc'];
?>	