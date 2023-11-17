<form method="POST">
	<input type="text" name="no" placeholder="enter no"> <!--5--><br>
	<input type="submit" name="s" value="loop"><br>
</form>

<?php
	if (isset($_POST['s']))
    {
		$n = $_POST['no']; //5
		for ($i=1;$i<=$n;$i++)
		 { 
			echo $i;
		}
	}
?>