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
.c {font-size: 20px;
    color:black;
    font-family: century;
    font-style:bold;

}

.d
{
  font-size:20px;
  color:red;
  background-color:blue;
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
      <tr>
        <td><div align="center">
        <form action="ins.php" method="post">
          <table width="600" height="150" border="2" align="center" bordercolor="green" bgcolor="pink">
            <tr>
              <td colspan="2" bgcolor="orange"><div align="center"><strong><span class="b">Enter the student information</span></strong></div></td>
            </tr>
            <tr>
              <td width="160"><span class="c">Name</span></td>
              <td width="222"><span class="c"><input type="text" name="name" /></span></td>
            </tr>
            <tr>
              <td><span class="c">Mobile</span></td>
              <td><span class="c"><input type="text" name="mobile" /></span></td>
            </tr>
            <tr>
              <td><span class="c">Email</span></td>
              <td><span class="c"><input type="email" name="email" /></span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" class="d" value="Add Student" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" class="d" value="Remove" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table><br><br><br>
<?php include "footer.php"; ?>
</body>
</html>