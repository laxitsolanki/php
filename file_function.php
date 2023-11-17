<?php
$list = array(
	array('name','mobile','email','city'),
	array('jay','1234567890','j@y.com','junagadh'),
	array('jaydeep','9876543210','jk@m.com','pakistan'),
	array('kishan','963852741')
);
$fp =fopen('jaydeep.csv','w');

foreach ($list as $fileds) {
fputcsv($fp,$fileds);
}
fclose($fp);
?>