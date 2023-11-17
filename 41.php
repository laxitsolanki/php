<?php
//built in function : string function
 echo strtoupper("hello welcome");
?>
<?php
//userdefine function
function up($s)
{
	return "<span style='text-trabsform:uppercase;'>$s</span>";
}
echo up ("jaydeep");
?>