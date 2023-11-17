<form method="POST">
	<input type="tetx" name="nm" value="" placeholder="enter name"><br>
	<input type="submit" name="s" value="save"><br>
</form>
<?php
if (isset($_POST['s']))
 {
	//file is handling functions
 	$nm = $_POST['nm'];
 	$fp = fopen("abc.txt","a"); //mode w-write, r-read, a-append
 	fwrite($fp,$nm); 
 	fclose($fp);

 	$fp = fopen("abc.txt","r");
 	$data = fread($fp,filesize("abc.txt"));
 	echo "<h1>".$data."</h1>";

$a=filesize("abc.txt");
echo "<br><h2>".$a."bytes</h2>";

echo "<h3><br> file_exists() = ".file_exists("c:\wamp\www\php\calc.exe");
echo "<br>is_writable() = ".is_writable("abc.txt");
echo "<br>is_readale() = ".is_readable("abc.txt")."<br></h3>";

if (file_exists("c:\wamp\www\php\calc.exe"))
{
	echo "<font color=green size=+3>file is exists</font>";
}
else
{
	echo "<font color=green size=+3>file is not exists</font>";
}
echo "</h2>";
?>
