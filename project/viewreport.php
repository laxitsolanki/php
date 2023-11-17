
<style type="text/css">

.a {
	font-family: century;
	font-size: 60px;
	color: red;
	font-style: italic;
}
.b {
	font-size: 24px;
	color: black;
}
.c{font-size: 16px}

</style>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="yellow" bgcolor="skyblue"><h1 align="center"><strong><span class="a">Attandance</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="yellow"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table width="606" border="2" align="center" bordercolor="orange" bgcolor="pink">
          	<tr><td colspan="3" align="center"><h3>Search Roll no Wise Records Here</h3></td></tr>
            <tr>
              <td width="308" bgcolor="brown"><div align="center"><strong><span class="b">Enter Roll no </span></strong></div></td>
              <td width="144" bgcolor="brown"><span class="c">
                <input type="text" name="eno" />
              </span></td>
              <td width="130" bgcolor="yellow"><input type="submit" value="View Details" name="btnsubmit"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include "connect.php";
			extract($_POST);
			$query = "select * from `student` where Roll no = ".$eno." limit 1";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="400" border="2" align="center" bordercolor="green" bgcolor="skyblue">
				<tr>
				  <td width="160" bgcolor="red"><span class="b">Roll no</span></td>
				  <td width="160" bgcolor="red"><span class="b">Name</span></td>';
				  $query1 = "select * from `add student` where `student id` = ".$rec["student id"]." order by Date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="red" class="b">'.$rec1["Date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="c">'.$rec["Roll no"].'</span></td>
				  <td width="222"><span class="c">'.$rec["Name"].'</span></td>';
				  $query1 = "select *from `add student` where `student id` = ".$rec["student id"]." order by Date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["Attandance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr> 
								
			  </table></td></tr>';
			}
		}
		else
		{
			include "connect.php";
			extract($_POST);
			$query = "select * from `student` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="black" bgcolor="rainbow">
				<tr>
				  <td width="160" bgcolor="white"><span class="b">Roll no</span></td>
				  <td width="160" bgcolor="white"><span class="b">Name</span></td>';
				  $query1 = "select * from `add student` where `student id` = ".$rec["student id"]." order by Date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="yellow" class="b">'.$rec1["Date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="c">'.$rec["Roll no"].'</span></td>
				  <td width="222"><span class="c">'.$rec["Name"].'</span></td>';
				  $query1 = "select *from `add student` where `student id` = ".$rec["student id"]." order by Date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["Attandance"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '99
				</tr>
								
			  </table></td></tr>';
			}
		}
		?>    
	</table>
	<br>
	<br>
<?php include "footer.php"; ?>
