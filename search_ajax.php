<?php 
session_start();
require("business.php");
require_once("function.php");
$query=$_POST['search'];
$query = sanitize_string($query);  
$fotos=search ($query);
$namber=count( $fotos);
$dir_mini = 'images/mini/'; // Папка с изображениями
$dir_watermark = 'images/watermark/'; // Папка с изображениями
$files= scandir($dir_mini); // Берём всё содержимое директории
$namber_g=0;
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $query1 = ['name' => $files[$i]];
      $person=get_person($query1);
      $own_text="private";
      $y=0;
      for($l=0; $l<$namber; $l++){
      if($person['title']==$fotos[$l]&&$person['own']!=$own_text)
                $y=1;
        }
    if($y){
      $path_watermark[$namber_g] = $dir_watermark.$files[$i]; // Получаем путь к картинке
      $path_mini[$namber_g] = $dir_mini.$files[$i];
      $name[$namber_g]=$person['name'];
      $author[$namber_g]=$person['author'];
      $title[$namber_g]=$person['title'];
      $namber_g++;
    }
}
}
include_once("views/search_ajax_view.php");
?>