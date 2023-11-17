<?php
//set the correct contect type

header('content-type:image/png');
//use the header() function to send a header to
//the web browser telling it the type of data it is about to receive.
//create our basic image using (125px width,125 height)

$image = imagecreate(250, 125);

//set the background color
//syntax : int imagecolorallocate(resource img,int red,int green, int blue)
$red = imagecolorallocate($image, 255, 0,0);

//save the image as a png and output
imagepng($image);
//clear up memory used

imagedestroy($image);

?>