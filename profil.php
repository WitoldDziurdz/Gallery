<?php session_start();
require("business.php");
if (!isset($_SESSION['zalogowany']))
{
  header('Location: galeria.php');
    exit();
}
$zalogowany=isset($_SESSION['zalogowany']);
$login=$_SESSION['login'];
$dir_mini = 'images/mini/'; // Папка с изображениями
  $dir_watermark = 'images/watermark/'; // Папка с изображениями
  $files= scandir($dir_mini); // Берём всё содержимое директории
  $namber=0;
  $namber_g=0;
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $query = ['name' => $files[$i]];
      $person=get_person($query);
      $own_text="private";
      $own=$person['own'];
      $own_text="private";
      $login=$_SESSION['login'];
      $kategorie_profils=get_profil_fotos($login);
      $y=0;
      $s=0;
      if($own==$own_text&&$login==$person['author'])
                $y=1;
      foreach ($kategorie_profils as $kategorie_profil) 
        {
            if($kategorie_profil['name']==$files[$i])
            {
                $s=1;    
            }
        }
      if($y){
      $path_watermark[$namber] = $dir_watermark.$files[$i]; // Получаем путь к картинке
      $path_mini[$namber] = $dir_mini.$files[$i];
      $name[$namber]=$person['name'];
      $author[$namber]=$person['author'];
      $title[$namber]=$person['title'];
      $namber++;
         }
         if($s){
      $path_watermark_g[$namber_g] = $dir_watermark.$files[$i]; // Получаем путь к картинке
      $path_mini_g[$namber_g] = $dir_mini.$files[$i];
      $name_g[$namber_g]=$person['name'];
      $author_g[$namber_g]=$person['author'];
      $title_g[$namber_g]=$person['title'];
      $namber_g++;
         }
}
}
include_once("views/profil_view.php");   
?>