<?php
	
	//normal
	$a = "Hello";
	echo $a;
	//coockie variable
	//create cookie variable
	setcookie("abc","Welcome",time()+30);//second//

	//fetch coockie values
	echo $_COOKIE['abc'];

	?>