<?php
	header("Content-type: image/jpeg");
    $im = @imagecreatefromjpeg("files/rose.jpg"); /* Attempt to open */

	$text_color = imagecolorallocate($im, 255, 0, 0);
	imagestring($im, 5, 5, 5,  "A Simple Text String", 
		$text_color);
	imagestringup($im, 5, 5, 200,  "A Simple Text String",
	 $text_color);
	imagejpeg($im);
	imagedestroy($im);
?>