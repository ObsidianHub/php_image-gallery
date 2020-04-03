<?php
function create_thumbnail($path, $save, $width, $height) {
  $info = getimagesize($path); //get image size and her type
	$size = array($info[0], $info[1]); //push to array
}