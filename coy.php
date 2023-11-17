<?php
$file = 'examle.txt';
$newfile ='example1.txt';
if (!copy($file,$newfile))
{
	echo "fsiled to copy $file..\n";
}
?>