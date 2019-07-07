<?php
session_start();
$code = rand(0,9).rand(0,9).rand(0,9).rand(0,9);
$_SESSION['code'] = $code;
$img = ImageCreateTrueColor(80, 30);
$black = imagecolorallocate($img, 0 ,0 ,0);
$color = imagecolorallocate($img,rand(0,255),rand(0,255),0);
imagefilledrectangle($img, 0, 0, 80, 30, $color);
imagettftext ($img, 15, rand(-10,10), 20, 20, $black, 
    "c:/xampp/htdocs/php/fonts/myfont.otf", $code);
header('content-Type:image/jpeg');
imagejpeg($img);
ImageDestroy($img);
