<?php
	header("Content-type: image/jpeg");
    $im_src = imagecreatefromjpeg("files/rose.jpg"); /* Attempt to open */
	$src_x=imagesx($im_src);
	$src_y=imagesy($im_src);
	$dest_width=200;
	$dest_height=200;
	//$im_dest=imagecreate($dest_width, $dest_height);
	$im_dest=imagecreatetruecolor($dest_width, $dest_height);
//int imagecopyresized ( resource dst_im, resource src_im, 
//int dstX, int dstY, int srcX, int srcY, int dstW, int dstH, 
	//int srcW, int srcH)
	imagecopyresized ( $im_dest, $im_src, 0, 0, 0, 0, 
		$dest_width, $dest_height, $src_x, $src_y);
	//imagejpeg($im_dest,"files/thumb.jpg");
	//imagepng
	imagejpeg($im_dest);
	imagedestroy($im_src); 
	imagedestroy($im_dest);
/*
users(uid,uname,password,dob)
user_album(aid,uid,album_title,dirname)
user_album_images(pid,aid,img_title,imgfilename)
$PATH="Uploads/"
<img src=<?php echo $PATH.$ur[uname]."/". */


?>
