<?php
header('Content-type: text/html; charset=utf-8');
error_reporting(-1);
include "fileLoad.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Gallery</title>
  <style>
    .gallery{
      width: 900px;
      margin: 0 auto;
      display: flex;
      flex-wrap: wrap;
      background-color: lightgray;
      border: 1px solid #000;
    }
    .item{
      margin: 10px;
    }
    .item img:hover{
      filter: saturate(10);
      transition: filter 500ms;
    }
  </style>
</head>
<body>
  
</body>
</html>