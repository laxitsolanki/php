
<?php
//fgetc:getting a character from file
$f = fopen('file.txt','r');
if (!$fp) {
	echo 'could not oen file file.txt';
}
while (false !== ($char = fgetc($fp))){
	echo "$char<br>";
}
echo "<br><br>";
?>
<hr>
*/
<?php
echo "<h1>here is get string (gets) function</h1>";
$handle = fopen("file.txt","r");
while (!feof($handle)){
$buffer =fgets($handle);
echo "$buffer *";
}
fclose($handle);
?>