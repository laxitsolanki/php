<h1>static</h1>
<?php
function test() //static--- fixed ($a=1,$a=2)
	{
	static $a=0;
	echo $a;
	$a++; //2
	}
	test();
	test();
	test();
	test();
	test();
	test();
?>