<h1>global :: access every where from your current page</h1>

<?php
	$a=10;
	$b=20;
	function test()
	{
	global $a,$b;
	$b = $a + $b;
	}
	test();
	echo $b;
?>