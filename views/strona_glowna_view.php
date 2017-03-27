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
     <link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css"/>
     <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>
     <script src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
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
  <script >
  $(function() {
    $( "#accordion" ).accordion({
      collapsible: true
    });
  });
  </script>

<body onload="data1();">
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
	     <img class="foto_gs" src="img/gs.jpg"  alt="">
		  <h2>Oglądanie filmów to nie hobby, czyli w obronie kinomanów</h2>
		   <p>
             Dowiedziałam się bowiem od dobrej znajomej z czasów licealnych, że oglądania filmów nie można nazwać hobby, bowiem jest to jedynie sposób marnotrawienia czasu i uciekania od problemów z życia codziennego. Do tego oglądanie filmów zupełnie nie rozwija i nie dostarcza żadnej wiedzy. Filmy można więc traktować jedynie jako formę rozrywki, po którą sięga się od czasu do czasu. Idąc dalej tokiem myślenia ów znajomej, okazało się również, że powinnam się wstydzić że znam dużo nazwisk aktorów i reżyserów i potrafię połączyć ich z filmami, w których występowali.Czy w ogóle można rozważać hobby w takich kategoriach: lepsze – gorsze?
			 </p>
		      <p>
             Jak można porównać ze sobą takie hobby jak powiedzmy zbieranie znaczków i granie w gry komputerowe, czy umiłowanie dla literatury rosyjskiej z miłością do brytyjskich seriali? No nie da się, ale wiadome jest to, że dla osoby interesującej się akurat tą dziedziną kultury czy nauki, to właśnie jej dziedzina będzie tą ważniejszą, tą lepszą. Może zabrzmi to źle, ale uważam że każde hobby jest wartościowe i żadne nie jest stratą czasu. Nie wiem jak dziecinne w oczach innych ludzi by nie było hobby, to i tak w jakimś stopniu nas rozwija.
			 </p>
		   <p>
             Ten wpis miał być  swego rodzaju wpisem w obronie kinomanów, poniżej muj ranking filmów.
			 </p>
		<div id="accordion">
  <h3 >Pulp Fiction</h3>
  <div>
    <img class="foto_gs_tabel" src="img/gs1.jpg"  alt="Pulp Fiction">
    <p>Pulp Fiction – amerykański film fabularny w reżyserii Quentina Tarantino z 1994 roku. <br/>
    Data premiery: 19 maja 1995 (Polska)<br/>
    Reżyseria: Quentin Tarantino<br/>
    Operator: Andrzej Sekuła<br/>
    Scenariusz: Quentin Tarantino</p>
  </div>
  <h3 >Skazani na Shawshank</h3>
  <div >
   <img class="foto_gs_tabel" src="img/gs2.jpg"  alt="Skazani na Shawshank">
    <p>Skazani na Shawshank – amerykański film fabularny z 1994 roku, w reż.Na podstawie opowiadania Stephena Kinga. <br/>
    Data premiery: 16 kwietnia 1995 (Polska)<br/>
    Reżyseria: Frank Darabont<br/>
    Autor muzyki: Thomas Newman<br/>
    Scenariusz: Frank Darabont<br/>
     </p>
	
  </div >
  <h3 >Podziemny krąg</h3>
  <div >
    <img class="foto_gs_tabel" src="img/gs3.jpg"  alt="Podziemny krąg">
    <p>Podziemny krąg – amerykański thriller psychologiczny z 1999 roku w reżyserii Davida Finchera zrealizowany na podstawie książki Chucka Palahniuka pod tym samym tytułem.<br/>
      Data premiery: 11 lutego 2000 (Polska)<br/>
      Reżyseria: David Fincher<br/>
      Autor pomysłu: Chuck Palahniuk<br/><br/>
     </p>
  </div>
  <h3 >Siedem</h3>
  <div >
    <img class="foto_gs_tabel" src="img/gs4.jpg"  alt="Siedem">
    <p>Siedem – amerykański thriller z 1995 roku w reżyserii Davida Finchera.<br/>
      Data premiery: 22 września 1995 (Stany Zjednoczone)<br/>
      Reżyseria: David Fincher<br/>
      Autor muzyki: Howard Shore<br/>
      Scenariusz: Andrew Kevin Walker<br/>
     </p>
  </div>
  <h3 >Django</h3>
  <div>
   <img class="foto_gs_tabel" src="img/gs5.jpg"  alt="Django">
    <p>Django – amerykański western filmowy z 2012 roku w reżyserii Quentina Tarantino. Tytuł filmu nawiązuje do dzieła Sergia Corbucciego z 1966 roku pod tym samym tytułem. <br/>
      Data premiery: 18 stycznia 2013 (Polska)<br/>
      Reżyseria: Quentin Tarantino<br/>
      Długość: 2g 45m <br/>
     </p>
  </div>
  
</div>
<div>
	  <p class="text_liczniki">Ostatni raz byłeś na stronie:</p>
	  <div id="data"  style="padding-top:16px; padding-left:3px;"></div> 
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