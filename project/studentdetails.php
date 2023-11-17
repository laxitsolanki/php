
<style type="text/css">
<!--
.a {
	font-family:century;
	font-size: 60px;
	color: red;
	font-style: italic;
}
.b {
	font-size: 24px;
	color: blue;
}
.c {font-size: 16px}
-->
tr{

}
tr:hover{
	background-color: yellow;

}
</style></head>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="yellow" bgcolor="skyblue"><h1 align="center"><strong><span class="a">Attendance</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="yellow"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      
      	<tr style="background-color: white;"><td colspan="2">
        <form action="" method=post>
        
        <table width="500" border="2" align="center" cellpadding="5" cellspacing="10" bordercolor="red" bgcolor="white">
        	<tr>
				  <td colspan="5" bgcolor="red"><div align="center"><strong><span class="b">student information</span></strong></div></td>
			</tr>
            <tr>
				  <td  bgcolor="skyblue"><div align="center"><strong><span class="b">Roll No</span></strong></div></td>
                  <td  bgcolor="skyblue"><div align="center"><strong><span class="b">Name</span></strong></div></td>
                  <td  bgcolor="skyblue"><div align="center"><strong><span class="b">Mobile</span></strong></div></td>
                  <td  bgcolor="skyblue"><div align="center"><strong><span class="b">Email</span></strong></div></td>
                 <td  bgcolor="skyblue"><div align="center"><strong><span class="b">Delete</span></strong></div></td>
			</tr>
				
		<?php
			include "connect.php";
			$query = "select *from `student` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr height=30px>
				  <td width="222"><span class="c">'.$rec["Roll no"].'</span></td>
				  <td width="222"><span class="c">'.$rec["Name"].'</span></td>
				  <td width="222"><span class="c">'.$rec["Mobile"].'</span></td>
				  <td width="222"><span class="c">'.$rec["Email"].'</span></td>
				  <td width="222"><span class="c">';
				  echo '<a style="background-color:white;color:red;border:solid;text-decoration:none;border-radius:10px;position:relative;top:0px;border-color:red;" href="deletestudent.php?d='.$rec["student id"].'">&nbsp;Delete&nbsp;</a></span></td></tr>';			  
			}
		
		?>    
        </table>
        </form>
        </td>
        </tr>
	</table>
    
<?php include "footer.php"; ?>