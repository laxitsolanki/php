<--difference betweeen GET and POST method
GET is passed by url
POST method is passed by body portion

GET method is not secured
POST method is secured

GET method is visible to the user
POST method is not visible to the user

range oF GET method is 255 characters in url
unlimited range provided by POST method

note : default method is GET
-->

<form method=get>
</form>

<form method=GET>
	<input type=text name=mo value="" placeholder="enter mobile no"><br>
	<input type=text name=em value="" placeholder="enter email"><br>
	<input type=password name="pass"  placeholder="enter your password"> <br>
</form>

	<?php

		echo "mobile no:-".$_GET['mo'];
		echo "<br>email:-".$GET['em'];
		echo "<br> your password is:-->".$_GET['pass'];
?>

<form method="POST">	
	<input type="text" name="no" value="" placeholder="enter your mobile no"><br>
	<input type="text" name="em" value="" placeholder="enter your email"><br>
	<input type="password" name="pass" value="" placeholder="enter your password"><br>
</form>
<?php
	echo "mobile no:-".$_POST['MO'];
	echo "<br>email:-".$post['em'];
		echo "<br> your password is:-->".$_post['pass'];
?>
	