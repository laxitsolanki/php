<?php
 	
 		//setcoockie("coockie name","coockie value","expirtime");
		setcookie("user","Alexa Porter", time()+6);

		//retrive coockie//
		echo $_COOKIE['user']."<a href=test2.php>Click</a>";
	?>