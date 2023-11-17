<?php
$n = $_POST['nm'];
setcookie("c_name","$n",time()+30);

echo $_COOKIE['c_name'];

?>

<a href="3.php">View Video</a>
