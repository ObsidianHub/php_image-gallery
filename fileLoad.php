<?php
include 'resize.php';

const ALOWED_SIZE = 3145728; // 3mb

function uploadFile($destinationFolder, $smallImgFolder) {
  $allowedImageTypes = ['image/gif', 'image/png', 'image/jpeg'];

  $newName = uniqid('img_'). "." . pathinfo($_FILES['imges']['name'])['extension'];
  $path = $destinationFolder . $newName;

  if($_FILES['imges']['size'] > ALOWED_SIZE){
    echo "Слишком большой размер файла<br>";
    return -1;
  }
  if(!in_array($_FILES['imges']['type'], $allowedImageTypes)){
    echo "Не верный формат файла";
    return -1;
  }

  if (move_uploaded_file($_FILES['imges']['tmp_name'], $path)) {
    echo "Файл загружен успешно <br>";
    create_thumbnail($path, $smallImgFolder . $newName, 200, 110);
  } else {
    echo "Ошибка загрузки файла <br>";
  }
}

function outputImagesFromDir($bigDir, $smallDir) {
  $smallFiles = scandir($smallDir);
  $bigFiles = scandir($bigDir);
  $quantityFiles = count($smallFiles);

  if($quantityFiles >= 3){
    for($i = 2; $i < $quantityFiles; $i++){
      echo "<a href='$bigDir$bigFiles[$i]' target='_blank' class='item'><img src='$smallDir$smallFiles[$i]'></a>";
    }
  }
  else{
    echo "нет файлов";
  }
}
?>