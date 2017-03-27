<?php
require_once("business.php");
function sanitize_string($var)
{
	$var=stripslashes($var);
	$var=strip_tags($var);
    $var=htmlentities($var);
    return $var;
}
function search ($query) { 
$query = sanitize_string($query);                     // Обрезаем пробелы и спецсиволы             // Удаляем HTML и PHP теги
$i=0;
if (!empty($query)){
$elements=search_title($query);
foreach ($elements as $element) {
   $fotos_view[$i]=$element ['title'];
   $i++;
   }
}
else break;
return $fotos_view;
}

function random()
{
	$filename = md5(microtime());
    return $filename;
}

function imageresize($source,$new_file,$width,$height) 
{
// цвет заливки фона
$rgb = 0xffffff;
//узнаем размеры исходной картинки
$size = getimagesize($source);
//пропорция ширины
$x_ratio = $width / $size[0];
//пропорция высоты
$y_ratio = $height / $size[1];
// определяем соотношения ширины к высоте
$ratio = min($x_ratio, $y_ratio);
$use_x_ratio = ($x_ratio == $ratio);
// высчитываем новую ширину картинки
$new_width = $use_x_ratio ? $width : 
 floor($size[0] * $ratio);
// высчитываем новую высоту картинки
$new_height = ! $use_x_ratio ? $height :
 floor($size[1] * $ratio);
// расхождение с заданными параметрами по ширине
$new_left = $use_x_ratio ? 0 :
floor(($width - $new_width) / 2);
// расхождение с заданными параметрами по высоте
$new_top = ! $use_x_ratio ? 0 :
floor(($height - $new_height) / 2);
// создаем холст пропорциональное сжатой картинке
$img = imagecreatetruecolor($width, $height);
// заливаем холст цветом $rgb
imagefill($img, 0, 0, $rgb);
// загружаем исходную картинку
if (exif_imagetype($source) == IMAGETYPE_JPEG){
$photo = imagecreatefromjpeg($source);
// копируем на холст сжатую картинку с учетом

imagecopyresampled($img, $photo, $new_left, $new_top,
 0, 0, $new_width, $new_height, $size[ 0], $size[1]);
// сохраняем результат
imagejpeg($img, $new_file);
// очищаем память после выполнения скрипта
}
else
{
	$photo = imagecreatefrompng($source);
// копируем на холст сжатую картинку
// с учетом расхождений
imagecopyresampled($img, $photo, $new_left, $new_top,
0, 0, $new_width, $new_height, $size[ 0], $size[1]);
// сохраняем результат
imagepng($img, $new_file);
// очищаем память после выполнения скрипта
}
imagedestroy($img);
imagedestroy($photo);
}

function watermark($source,$new_file,$text_watermark) 
{
$rgb = 0xCC0000;
$ix=10; // x координата вставки текста 
$iy=10; // y координата вставки текста
$height_text=15;
if (exif_imagetype($source) == IMAGETYPE_JPEG){
$image = imagecreatefromjpeg($source);
imageString($image, $height_text, $ix, $iy, $text_watermark,$rgb); 
//вывод получившейся картинки 
imagejpeg($image,$new_file); 
	}
else
{
   $image = imagecreatefrompng($source);
   imageString($image, $height_text, $ix, $iy, $text_watermark,$rgb); 
//вывод получившейся картинки 
   imagepng($image,$new_file); 
}
imagedestroy($image); 
}
?>