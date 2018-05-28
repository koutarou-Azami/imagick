<?php
$str = $_GET['str'];
$file = $_GET['file'];

$image = new Imagick($file);

$draw = new ImagickDraw();
$draw->setFont('usr/share/fonts/ipa-gothic/ipag.ttf');
$draw->setFontSize('24');
$draw->setFillColor('#ff0000');
$draw->annotation(10, 100, $str);
$image->drawImage($draw);

header("Content-Type: image/png");
ob_clone();
echo $image;
?>
