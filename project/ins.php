<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "connect.php";
		if($rec=mysqli_fetch_array(mysqli_query($con,"SELECT  'Roll no' FROM `student` order by 'student id' desc limit 1")))
		{
			$bid =1+ $rec['student id'];
		}
		$rl = date("Y").$bid;
		
		$query = "INSERT INTO  `student`(`Roll no` ,  `Name` ,  `Mobile` ,  `Email`) VALUES('$rl','$name','$mobile','$email')";

		$q = mysqli_query($con,$query)or die("insert error");
		
			print "<script>";
			print "alert('Student add successfully....');";
			print "self.location='addstudent.php';";
			print "</script>";
		
	}
	else
	{
		header("Location:addstudent.php");
	}
?>
<?php include  "footer.php"; ?>

