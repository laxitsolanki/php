<form method=POST>
		<input type=text name="n1" placeholder="enter no" value=""><br>
		<input type="text" name="n2" placeholder="enetr no2" value=""><br>
		<input type="submit" name="s" value="addition"><br>
		<input type="submit" name="s" value="subscption"><br>


</form>

	<?php
		if (isset($_POST['s'])) 
		{
			$a = $_POST['n1'];
			$b = $_POST['n2'];
			$c = $a+$b;
			echo "$c";
		}
	?>
	<?php
		if (isset($_POST['s'])) 
		{
			$a = $_POST['n1'];
			$b = $_POST['n2'];
			$c = $a-$b;
			echo "$c";
		}
	?>