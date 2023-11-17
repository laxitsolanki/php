<?php
		include_once "connect.php";
		mysqli_query($con,"DELETE FROM `student` WHERE `student id` = ".$_GET["d"]." LIMIT 1;") or die("Delete member error");
	
		print "<script>";
				print "alert('student  Deleted succesfully.....');";
				print " self.location='viewreport.php';"; // Comment this line if you don't want to redirect
		print "</script>";
		
	
?>
<?php
	include "footer.php";
?>