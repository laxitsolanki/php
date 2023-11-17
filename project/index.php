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
.c {font-size: 16px}

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
          <table width="400" border="2" align="center" bordercolor="#9966FF" bgcolor="#C7B6B1">
            <tr>
              <td colspan="2" bgcolor="#9999CC"><div align="center"><strong><span class="style2">Enter the member information</span></strong></div></td>
            </tr>
            <tr>
              <td width="160"><span class="style6">Name</span></td>
              <td width="222"><span class="style6"><input type="text" name="name" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Mobile</span></td>
              <td><span class="style6"><input type="text" name="mobile" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Email</span></td>
              <td><span class="style6"><input type="email" name="email" /></span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" value="Add Member" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
<?php include "footer.php"; ?>
</body>
</html>