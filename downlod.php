<?php
header("content-type: application/mp3");
header("content-disposition: attachment; filename=file/mp3");
header("pragma: no-cache");
header("expires:0");
readfile("file/Puchda Hi Nahin - Neha Kakkar.mp3");
exit;
?>