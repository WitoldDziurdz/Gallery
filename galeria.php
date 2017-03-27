<?php 
  session_start();
  $zalogowany=isset($_SESSION['zalogowany']);
  $login=$_SESSION['login'];
  require_once("business.php");
  $dir_mini = 'images/mini/'; // Папка с изображениями
  $dir_watermark = 'images/watermark/'; // Папка с изображениями
  $files= scandir($dir_mini); // Берём всё содержимое директории
  $namber=0;
  for ($i = 0; $i < count($files); $i++) { // Перебираем все файлы
    if (($files[$i] != ".") && ($files[$i] != "..")) { // Текущий каталог и родительский пропускаем
      $query = ['name' => $files[$i]];
      $person=get_person($query);
      $own=$person['own'];
      $own_text="private";
      $y=1;
      if($own==$own_text)
                $y=0;
      if($y){
      $path_watermark[$namber] = $dir_watermark.$files[$i]; // Получаем путь к картинке
      $path_mini[$namber] = $dir_mini.$files[$i];
      $name[$namber]=$person['name'];
      $author[$namber]=$person['author'];
      $title[$namber]=$person['title'];
      if($login){
      $name_search = ['name' => $name[$namber]];
      $name_foto=get_profil_foto($login,$name_search);
      if($name_foto['name'])
      $o[$namber]=1;
      else $o[$namber]=0;
    }
    else $o[$namber]=0;
    $namber++;

         }
}
}
include_once("views/galeria_view.php");
?>
