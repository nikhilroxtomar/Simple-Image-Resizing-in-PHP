<?php
function imgResize($img, $req_width){
  $img_size = getimagesize($img);
  $width = $img_size[0];
  $height = $img_size[1];

  if($width > $height){
    $p = ($req_width / $width);
  }else{
    $p = ($req_width / $height);
  }

  $width = round($width * $p);
  $height = round($height * $p);

  $new_image = '<img src="'.$img.'" height="'.$height.'" width="'.$width.'">';
  return $new_image;
}
?>
