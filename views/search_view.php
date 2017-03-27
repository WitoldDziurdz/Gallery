
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
     <script src="http://ajaxs.ru/demo/ajax/liveSearch/js/jquery-1.5.1.min.js" type="text/javascript"></script>
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
$(function(){
  $("#search").keyup(function(){
     var search = $("#search").val();
     $.ajax({
       type: "POST",
       url: "search_ajax.php",
       data: {"search": search},
       cache: false,                                 
       success: function(response){
          $("#resSearch").html(response);
       }
     });
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
	   <form action="search_ajax.php" method="post" name="form" onsubmit="return false;">
  <p>
    Wyszukiwarka:<br> 
    <input name="search" type="text" id="search">
    <small>Wpisz tytuł</small>
  </p>
</form>
<div>
<h3>Galerja wyszukanych zdjęńć</h3>
<div id="resSearch">Tu pojawią się zdjęcia</div>
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
     