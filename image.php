<?php
//pallete based images (create from scratch) , existing images
header("Content-type: image/png");
//$im = @imagecreate(250, 30)	or die("Cannot Initialize new GD image stream");

$im = @imagecreate(30, 250) or die("Cannot Initialize new GD image stream");
//imagecolorallocate($ih,R,G,B) 0 to 255
$background_color = imagecolorallocate($im, 255, 255, 255);
$text_color = imagecolorallocate($im, 233, 14, 91);
//imagestring($im, 5, 5, 5,  "48475896",$text_color); // write string horizontally

imagestringup($im, 5, 5, 200,  "A Simple Text String", $text_color); // write string vertically
imagepng($im);
imagedestroy($im);
?>