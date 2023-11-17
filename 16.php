<form method=POST>

	<input type=text name=nm value="" placeholder="enter name"><br>
	
	<input type=radio name=g value="m"> male <input type=radio name=g value="f">female<br>

	<select name=product>
		<option>apple</option>
		<option>dell</option>
		<option>sony</option>
	</select>
<br>
	<input type="submit" name="s" value="confirm"><br>
</form>

	<?php
		echo "name:)".$_POST['nm'];
		echo "<br>gender:)".$_POST['g']."<br>";
		echo "product:)".$_POST['product'];
	?>