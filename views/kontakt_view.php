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
    <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui1.css"/>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="jquery-ui-1.11.4.custom/jquery-ui1.js"></script>
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
	<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
</head>

<body onload="odliczanie();">
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
	    <h2>O projekcie</h2>
	   <img class="foto_kontakt" src="img/1.jpg"  alt="">
	   <p>"Historia jest jak dobre stare kino. Przed twoimi oczami przesuwają się bohaterowie: zwycięzcy i straceńcy. A ty nie musisz biedzić się nad scenariuszem, bo jest już gotowy." - Quentin Tarantino</p>
	    <p>"Zajmuj się jedynie tym, co wychodzi Ci najlepiej. Mów wyłącznie o sprawach, na których naprawdę się znasz." - Steven Spielberg</p>
	   <div style="clear: left"></div>
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">O stronie</a></li>
    <li><a href="#tabs-2">Adres kontaktowy</a></li>
  </ul>
  <div id="tabs-1">
   <img class="svg_kontakt" src="svg/building120.svg" alt="">
    <p style="padding:10px">Ta strona poświęcona jest liście moich ulubionych filmów.
		Te pięć filmów,według mnie, są najlepszymi kandydatami na umieszczenie na stronie.</p> 
  </div>
  <div id="tabs-2">
   <img class="svg_kontakt" src="svg/email5.svg" alt="">
    <p style="padding:10px">Tel.: +48 570 414 286<br/> 
                  E-Mail: witolddzyurdz@gmail.com<br/>
                  E-Mail: s160349@student.pg.gda.pl<br/>
                  E-Mail: vitia32@mail.ru<br/> 	 				  
	  </p>
  </div>
  <div style="clear: left"></div>
 
</div>
	  </div>
	  <div id="social">
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