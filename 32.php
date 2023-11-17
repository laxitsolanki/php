<form>
<input type="text" name="no" placeholder="enter no"><br>
<input type="submit" name="s" value="check"><br>
</form>
<?php
if (isset($_POST['s'])) {
	echo "negative";
}
elseif ($a>0) {
	echo "positive";
}
elseif ($a==0) {
	echo "enter value is 0";
}
else{
	echo "none of above";
}
?>