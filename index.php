<?php
$text = $_GET ["text"];

/*
 * Create image 100x100
 */
$height=100;
$width=100;
$im = imagecreatetruecolor ($width,$height);

/*
 * Write text to the specified position
 */
$textcolor = imagecolorallocate ( $im, 0xFF, 0xFF, 0xFF );
imagestring ( $im, 3, $height/3, $width/2, $text, $textcolor );

/*
 * Save image to the file system current working directory
 */
imagepng ( $im, './stringup.png' );

/*
 * Read image from file system
 */
$im = file_get_contents ( './stringup.png' );

/*
 * Encode image with base64
 */
$imdata = base64_encode ( $im );

/*
 * Response encoded image data
 */
echo $imdata;

/*
 * Destroy image data
 */
imagedestroy ( $im );
?>