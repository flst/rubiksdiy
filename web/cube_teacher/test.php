<?php


//建立一幅100*30的图像
$image = imagecreatetruecolor(400,300);
        
//设置背景颜色
$bgcolor = imagecolorallocate($image,0,0,0);


$block_side_len = 20;
//设置字体颜色
$red = imagecolorallocate($image,255,0,0);
$yellow = imagecolorallocate($image,255,255,0);
$green = imagecolorallocate($image,0,255,0);
        
//把字符串写在图像左上角
$points = array (5, 5, 5, 15, 13, 20, 13, 10);
imagefilledpolygon($image, $points, 4, $red);

$points = array (13, 10, 13, 20, 21, 15, 21, 5);
imagefilledpolygon($image, $points, 4, $green);

$points = array (5, 5, 13, 10, 21, 5, 15, 0);
imagefilledpolygon($image, $points, 4, $yellow);
        
ob_start();
imagejpeg($image);
$data =ob_get_contents();
ob_end_clean();
imagedestroy($image);
echo '<img src="data:image/jpeg;base64,'.base64_encode($data).'">';

?>