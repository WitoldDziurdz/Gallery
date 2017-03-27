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
        $(document).ready(function(){
            var touch = $('#touch-menu');
            var menu = $('ol>li');
            $(touch).on('click', function(e) {
                e.preventDefault();
                menu.slideToggle();
            });
            $(window).resize(function(){
                var wid = $(window).width();
                if(wid > 760 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            });
        });
    </script>
    <script type="text/javascript">
        $(document).ready(function(){
            // Фикмированная шапка при скролле
            $("#header").removeClass("default");
            $(window).scroll(function(){
                if ($(this).scrollTop() > 20) {
                    $("#header").addClass("default").fadeIn('fast');
                } else {
                    $("#header").removeClass("default").fadeIn('fast');
                };
            });
            // Плавный скролл по якорям
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
        <?php if (!$zalogowany): ?>
    <div>
         <h3>Logowanie do prowilu</h3>
          <form method="post"
                action="zaloguj.php">
          <div class="formularz">
          <p class="text_galeri">Login:</p>
          <input type="text" name="login" required/>
           </div>
          <div class="formularz">
          <p class="text_galeri">Hasło:</p>
          <input type="password" name="password" required/>
          <input class="submit_galeri" type="submit" value="Zaloguj się"/>
          </div>
          <div style="clear: left;padding-top:10px">
          <div><?php echo "$text_login";?></div>
          <a class="galeri_href" href="registration.php"><div class="galeri_div">Rejestracja profilu  </div></a> 
        </div>
        </form>
      </div>      
     <?php endif; ?>
     <?php if ($zalogowany){
            echo' <p class="text_galeri">Witaj'.' '.$login.' '.'jesteś zalogowany.</p>';
            echo' <a class="galeri_href" href="logout.php"><div class="galeri_div">Wyloguj</div></a>';
            echo' <a class="galeri_href" href="profil.php"><div class="galeri_div">Strona twojego profilu</div></a>';
        }
       ?>
      
        <a class="galeri_href" href="search.php" ><div class="galeri_div">Search po stronie  </div></a>
     
      <div>
          <h3>Formolarz wysyłania zdjęńć</h3>
          <form method="post"
                action="add_photos.php"
                enctype="multipart/form-data">
          <div class="formularz">
          <p class="text_galeri">Autor:</p>
          <?php if (!$zalogowany)
          echo '<input type="text" name="author" required/>'; 
           else 
          echo '<input type="text" name="author" value="'.$login.'" disabled="disabled" />';
          ?>
          </div>
          <div class="formularz">
          <p class="text_galeri">Tytuł:</p>
          <input type="text" name="title" required/>
          </div>
          <div class="formularz">
          <p class="text_galeri">Znak wodny:</p>
          <input type="text" name="watermark" required/>
          </div>
          <div class="formularz_zdjencie">
          <p class="text_galeri">Wybierz plik w formacie JPG lub PNG:</p>  
          <input class="submit_galeri" type="file" name="filename" required/>
          <?php if ($zalogowany): ?>
          <div>
          <p class="text_radio">Prywatny:</p>
          <input class="radio" type="radio" name="own" value="private"/>
          </div>
          <div>
          <p class="text_radio">Publiczny:</p>
          <input class="radio" type="radio" name="own" value="public"/>
          </div>
          <?php endif; ?>
          <?php if (!$zalogowany)
          echo'<input type="hidden" name="own" value="public"/>';
          ?>
          <input class="submit_galeri" type="submit" value="Wyślij"/>
          <div><?php echo "$text_galerja";?></div>
           </div>
        </form>
    </div>
  
  <h3>Galerja zdjęńć</h3>
  <div class="galeri">
  <?php
  if ($zalogowany){
  echo'<form method="post"
                action="add_photos_profil.php">';}
  echo "<table>"; // Начинаем таблицу
  $k = 0; // Вспомогательный счётчик для перехода на новые строки
  $cols = 4; // Количество столбцов в будущей таблице с картинками
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
      if ($zalogowany)
      echo '<input type="checkbox" name="kategorie[]" value="'.$name[$i].'"';
      if($o[$i]==1)
      echo'checked';
      if ($zalogowany)
      echo '/>';
      echo "</td>"; // Закрываем столбец
      /* Закрываем строку, если необходимое количество было выведено, либо данная итерация последняя */
      if ((($k + 1) % $cols == 0) || (($i + 1) == $namber)) echo "</tr>";
      $k++; // Увеличиваем вспомогательный счётчик
    }
  echo "</table>"; // Закрываем таблицу
  if ($zalogowany){
  echo'<input class="submit_galeri" type="submit" value="Zapamiętaj wybrane"/>';
  echo"</form>";}
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