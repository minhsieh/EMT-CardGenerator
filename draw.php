<?php
function big52uni($text) { 
    $rtext=""; 
    $max=strlen($text); 
    for($i=0;$i<$max;$i++){ 
      $h=ord($text[$i]); 
      if($h>=160 && $i<$max-1){ 
        $rtext.="&#".base_convert(bin2hex(iconv("big5","ucs-2",substr($text,$i,2))),16,10).";"; 
        $i++; 
      }else{ 
        $rtext.=$text[$i]; 
      } 
    } 
    return $rtext; 
  } 
  // Create the image
  $img = imagecreatetruecolor(638,1010);

  $background_img = imagecreatefromjpeg("lv1.jpg");

  imagecopy($img,$background_img,0,0,0,0,638,1010);
  
  // Set a white background with black text and gray graphics
  $color_white = imagecolorallocate($img, 255, 255, 255);     // white
  $color_black = imagecolorallocate($img, 0, 0, 0);         // black
  $color_gray = imagecolorallocate($img, 64, 64, 64);   // dark gray


  // Draw the pass-phrase string
  imagettftext($img, 24, 0, 440, 662, $color_black, 'te.ttf','test');
  // Output the image as a PNG using a header
  
  header("Content-type: image/png");
  imagepng($img);

  // Clean up
  imagedestroy($img);
?>
