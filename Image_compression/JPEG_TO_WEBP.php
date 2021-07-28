<?php 


$imageLocationBefore = 'camera.jpg';

$imageLocationAfter = 'camerawebp.webp';

// If anyone convert another extention file, so you have to do change imagecreatefrom{jpeg} this part like png/gif/
$img = imagecreatefromjpeg($imageLocationBefore);

imagepalettetotruecolor($img);
imagealphablending($img, true);
imagesavealpha($img, true);

imagewebp($img,$imageLocationAfter, 60);

imagedestroy($img);


















?>