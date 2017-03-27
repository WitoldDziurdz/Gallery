
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
	<div>
		 <h3>Rejestracja prowilu</h3>
		  <form method="post"
		        action="registration.php">
		  <p class="text_galeri">Login:</p>
		  <input type="text" name="login" required/>
		  <p class="text_galeri">Hasło:</p>
		  <input type="password" name="password" required/>
		   <p class="text_galeri">Powturz hasło:</p>
		  <input type="password" name="password_double" required/>
		   <p class="text_galeri">Adres e-mail:</p>
		  <input type="email" name="mail" required/>
		 <input class="submit_galeri" type="submit" value="Rejestracja"/>
		</form>
	    </br>
		<a class="galeri_href" href="galeria.php"><div class="galeri_div">Wróć do galerji</div></a>
         <!-- <div class="galeri_div"><a class="galeri_href" href="uninstall_baza.php">usun</a></div> -->
	  </div>
	  <?php
	  if($text)
       echo "$text";
      ?>
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
