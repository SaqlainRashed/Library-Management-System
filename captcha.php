<?php
session_start();

$text = "1234"; // Set the CAPTCHA text to "1234"
$_SESSION["vercode"] = $text;

$height = 25;
$width = 65;

$image_p = imagecreate($width, $height);
$black = imagecolorallocate($image_p, 0, 0, 0);
$white = imagecolorallocate($image_p, 255, 255, 255);
$font_size = 14;

imagestring($image_p, $font_size, 5, 5, $text, $white);

header('Content-Type: image/jpeg');
imagejpeg($image_p, null, 80);
imagedestroy($image_p);
?>
