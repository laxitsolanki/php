<?php
	header('location:http://localhost/php/1.php');
?>
<hr>
<hr>
<?php
//we'll be outpuuting a pdf
header('content-type: application/JPG');
//it will be called downlode.pnj
header('content-Disposition: attachment; filename="Logo.JPG"');
//the pnj soure is in logo.pnj
readfile('Logo.JPG');
?>