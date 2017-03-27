
<!DOCTYPE HTML>
<html lang="pl-PL">
<head>
     <meta charset="utf-8"/>
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
	 <title>Moje ulubione filmy</title>
	 <meta name="description" content="filmy 5 top" />
	<meta name="keywords" content="filmy, 5 top, najlepsze" />
     <link rel="Stylesheet" href="style.css" />
    <script type="text/javascript" src="js/jquery.1.7.1.min.js"></script>
	 <script src="js/my.js"></script>
	<script type="text/javascript">
			$('a[href^="#"]').click(function () { 
			    elementClick = $(this).attr("href");
				destination = $(elementClick).offset().top;
				if($.browser.safari){
				$('body').animate( { scrollTop: destination }, 1000 );
				} else {
			    	$('html').animate( { scrollTop: destination }, 1000 );
				}
				return false;
		   });
		});
	</script>
	
</head>
<body >
    <div id="container">
	  <div id="head">
	      <div id="logo"><img id="svg_logo" src="svg/movie36.svg" alt=""> MOJE ULUBIONE FILMY</div> 
		  </div>
	  <div id="menu">
	  		<a href="" id="touch-menu">Menu</a>
	     <ol>
		      <li><a href="strona_glowna.php">Strona główna</a></li>
	          <li><a href="o_filmach.php" id="touch-menu1">O filmach</a>  
			  </li>
			  <li><a href="galeria.php">Galeria</a></li>
			  <li><a href="kontakt.php">Kontakt</a></li>
	     </ol>
		 
	   </div>
	  <div id="content"> 	
	
     <?php 
     		echo'<p class="text_galeri">Witaj'.' '.$login.' '.'jesteś zalogowany.</p>';
     		?>
        <a class="galeri_href" href="logout.php"><div class="galeri_div">Wyloguj</div></a>
        <a class="galeri_href" href="galeria.php"><div class="galeri_div">Wruć do galerji</div></a>
			<!-- <a href="uninstall_foto_baza.php">usun foto</a> -->

<h3>Galerja prywatnych zdjęńć</h3>
<div class="galeri">
<?php
  $cols = 4; // Количество столбцов в будущей таблице с картинками
  echo "<table>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
  for($i = 0; $i < $namber; $i++)
{
      if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
      echo "<td>"; // Начинаем столбец
      echo "<a href='$path_watermark[$i]'>"; // Делаем ссылку на картинку
      echo "<img src='$path_mini[$i]' alt='' />"; // Вывод превью картинки
      echo "</a>"; // Закрываем ссылку
      echo "</br>";
      echo "Autor:$author[$i]";
      echo "</br>";
      echo "Tytuł:$title[$i]";
      echo "</td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if ((($k + 1) % $cols == 0) || (($i + 1) == $namber)) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
    }
  echo "</table>"; // Закрываем таблицу
  echo"</form>";
?>
</div>

  
  <h3>Galerja zdjęńć</h3>
  <div class="galeri">
  <?php
  echo'<form method="post"
		        action="uninstall_photos_profil.php">';
  echo "<table>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
for($i = 0; $i < $namber_g; $i++)
{
      if ($k % $cols == 0) echo "<tr>"; // Добавляем новую строку
      echo "<td>"; // Начинаем столбец
      echo "<a href='$path_watermark_g[$i]'>"; // Делаем ссылку на картинку
      echo "<img src='$path_mini_g[$i]' alt='' />"; // Вывод превью картинки
      echo "</a>"; // Закрываем ссылку
      echo "</br>";
      echo "Autor:$author_g[$i]";
      echo "</br>";
      echo "Tytuł:$title_g[$i]";
      echo '<input type="checkbox" name="kategorie[]" value="'.$name_g[$i].'"/>';
      echo "</td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if ((($k + 1) % $cols == 0) || (($i + 1) == $namber_g)) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
    }
  echo "</table>"; // Закрываем таблицу
  echo'<input class="submit_galeri" type="submit" value="Usuń zaznaczone z zapamiętanych"/>';
  echo"</form>";
?>
 </div>
	  </div>
	  
	  <div id="social" >
	     <a href="https://www.facebook.com"><div class="fb">
		  <img class="svg_social" src="svg/facebook52.svg" alt="">
		  </div></a>
		  <a href="https://vk.com"><div class="vk">
		   <img class="svg_social" src="svg/vk.svg" alt="">
		  </div></a>
		  <a href="https://twitter.com"><div class="tw">
		 <img class="svg_social" src="svg/twitter42.svg" alt="">
		  </div></a>
		 <a href="https://www.youtube.com"> <div class="yt" >
		   <img class="svg_social" src="svg/videos.svg" alt="">
		  </div></a>
	  </div>
	  
	  <div id="boot_list">
	  <p class="boot_list_text">Copyright &copy; 2015. Wszystkie prawa zastrzeżone.</p>
	  </div>
	  
    </div>
	
</body>

</html>