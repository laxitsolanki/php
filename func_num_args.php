<?php
function arguments()
{
	$numargs =func_num_args();
	echo "number of arguments: $numargs";
}
arguments(1,2,3,0);
?>