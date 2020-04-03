<?php
function create_thumbnail($path, $save, $width, $height) {
  $info = getimagesize($path); //get image size and her type
  $size = array($info[0], $info[1]); //push to array
  
  // depends on extends image call the func
	if ($info['mime'] == 'image/png') {
		$src = imagecreatefrompng($path); //create new image from file
	} else if ($info['mime'] == 'image/jpeg') {
		$src = imagecreatefromjpeg($path);
	} else if ($info['mime'] == 'image/gif') {
 		$src = imagecreatefromgif($path);
	} else {
		return false;
  }
  
  $thumb = imagecreatetruecolor($width, $height);
	$src_aspect = $size[0] / $size[1]; // image width to height radio
	$thumb_aspect = $width / $height; //thumb width to height radio
}