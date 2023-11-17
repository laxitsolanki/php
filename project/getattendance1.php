<?php
	if(isset($_POST["btnsubmit"]))
	{
		include "connect.php";
		
		$date = $_POST["cyear"]."-".$_POST["cmonth"]."-".$_POST["cdate"];
               		
		$query = "select *from `student` ";
		$result = mysqli_query($con,$query)or die("select error");
		while($rec = mysqli_fetch_array($result))
		{
			$mno = $rec["student id"];
			if(isset($_POST[$mno]))
			{
				$query1 = "INSERT INTO  `add student`(`student id` ,  `Date` ,  `Attandance`) VALUES('$mno','$date','1')";
			}
			else
			{
				$query1 = "INSERT INTO  `add student`(`student id` ,  `Date` ,  `Attandance`) VALUES('$mno','$date','0')";
			}
			mysqli_query($con,$query1)or die("insert error".$mno);
			print "<script>";
			print "alert('Attendance get successfully....');";
			print "self.location='getattendance.php';";
			print "</script>";
		}
		
		
			
		
	}
	else
	{
		header("Location:addstudent.php");
	}
?>

<?php include "footer.php"; ?>

