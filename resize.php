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
	$src_aspect = $size[0] / $size[1]; // image width to height ratio
  $thumb_aspect = $width / $height; //thumb width to height ratio
  
  if($src_aspect < $thumb_aspect) {
		$scale = $height / $size[1];
		$new_size = array($height * $src_aspect, $height);
		$src_pos = array(($size[0] * $scale - $width) / $scale / 2, 0);
	} else {
		//другое
		$new_size = array($width, $height);
		$src_pos = array(0,0);
	}
}