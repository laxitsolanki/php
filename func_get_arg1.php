<?php
function test()
{
	echo "<font color=red size=+4>".func_get_arg(1)."</font>";
}
test(20,40,10);
?>