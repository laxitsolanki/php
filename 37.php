<?php
	$arr = array(200,"jay","abc","aa","bb");

	for($i=0;$i<=3;$i++){
	echo $arr[$i]."<br>";
	}
	echo "<hr>";
	foreach ($arr as $index => $data){
	echo $data."<br>";
	}
	echo "<hr>";
	foreach ($arr as $jaydeep => $meraz){
	echo "index ".$jaydeep."value".$meraz."<br>";
	}
?>++++++++++++++