<!DOCTYPE html>
<html>
<head>
<title> Image Resize in PHP </title>
</head>

<body>

<?php
  include('resize.php');
  $img = "blank.png";
  $new_img = imgResize($img, 500);
  echo $new_img;
?>

</body>
</html>
