<body style="margin: 0px; background-color:gray;">
<div style="color:white; font-size:2.24em; background-color:orange; padding:20px;">my web</div>
<div style="background-color:black; padding: 10px;">
	<a href="34.php?v=1" style="color: white; font-size: 1.4em; text-decoration: none;">home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="34.php?v=2" style="color: white; font-size: 1.4em; text-decoration: none;">contact us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<a href="34.php?v=3" style="color: white; font-size: 1.4em; text-decoration: none;">about us</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>
<div style="width: 90%; margin: 0 auto; background-color: white;">
	<?php 
	if (isset($_GET['v'])) {
		$var = $_GET['v'];
		switch ($var) {
			case '1':
				echo "<h2>home</2>";
	?>
		<img src="logo.jpg">
		<br><br>
		<p>welcome to php<br> my fast web site </p>
	<?php
		break;
		case '2':
			echo "<h2>contact us </2><h3>mobile7874247830<br>email: solankilaxit963@gmail.com<br>";
			break;
			case '3':
				echo "<h2>about us </h2>";
				break;
				default:
				break;
		}
	}
	else{
		?>
		<h2>home</h2>
		<img src="logo.jpg" width=100% height=400%>
		<br><br>
		<p>welcome to php <br> my frist web side</p>
		<?php
	}
	?>
</div>
</body>