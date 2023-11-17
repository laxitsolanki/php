<?php
echo tan(m_pi_4);
//
echo "<br>".cos(1);
echo "<br>".sin(3);
echo "<br>".bindec(10);
echo "<br>".decbin(2);
echo "<br>".dechex(150);
?>
<hr>
<?php
echo "<h3>base_convert:convert a number between arbitrary bases</h3><br>";
$hexadecimal = '2';
echo base_convert($hexadecimal,16,2);
?>
<hr>
<?php
//deg2rad:converts the number in degrees to the radiant equivalent
echo "<br>".deg2rad(180);
?>