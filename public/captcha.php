<?php
session_start(); 
$characters_on_image = 5;
$possible_letters = 'AQLbcdfghjkmnpqrstvwxyz';
$random_dots = 140;
$random_lines = 5;
$captcha_text_color="0x142864";
$captcha_noice_color = "0x142864";



$text = '';
$i = 0;
while ($i < $characters_on_image) { 
$text .= substr($possible_letters, mt_rand(0, strlen($possible_letters)-1), 1);
$i++;

$_SESSION["vercode"] = $text; 
}
// Create the image
$im = imagecreatetruecolor(120, 30);

// Create some colors
$white = imagecolorallocate($im, 205, 205, 205);
$grey = imagecolorallocate($im, 128, 128, 128);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 399, 29, $white);

// Replace path by your own font path
$font = 'tahoma.ttf';

// Add some shadow to the text
imagettftext($im, 20, 3, 11, 21, $grey, $font, $text);

// Add the text
imagettftext($im, 20, 3, 10, 20, $black, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>