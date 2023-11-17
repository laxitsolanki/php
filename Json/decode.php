<?php
echo "<h1>Example 1</h1>";

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';  //json -----> php

var_dump(json_decode($json)); //converting data to php via json parsing

echo "<br><br>json decode using TRUE<br>";

var_dump(json_decode($json, true));

?>
<?php
echo "<h1>Example 2</h1>";
$json = '{"foo-bar": 12345}';

$obj = json_decode($json);
print $obj ->{'foo-bar'}; //12345

?>