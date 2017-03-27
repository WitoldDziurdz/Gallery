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
	 <script type="text/javascript" src="js/my.js"></script>
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
			var touch = $('#touch-menu1');
		    var menu = $('#pod_menu');
			
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

<body onload="odliczanie();">
    <div id="container">
	  <div id="head">
	     <div id="logo"><img id="svg_logo" src="svg/movie36.svg" alt=""> MOJE ULUBIONE FILMY</div> 
		 </div>
	  <div id="menu">
	  		<a href="" id="touch-menu">Menu</a>
	     <ol>
		      <li><a href="strona_glowna.php">Strona główna</a></li>
	          <li><a href=" " id="touch-menu1">O filmach</a>
			      <ul id="pod_menu">
				       <li><a href="#Pulp_Fiction">Pulp Fiction</a></li>
					   <li><a href="#Skazani_na_Shawshank">Skazani na Shawshank</a></li>
					   <li><a href="#Podziemny_krag">Podziemny krąg</a></li>
					   <li><a href="#Siedem">Siedem</a></li>
					   <li><a href="#Django">Django</a></li>
				  </ul>    
			  </li>
			  
			  
			  <li><a href="galeria.php">Galeria</a> 
			  </li>
			  <li><a href="kontakt.php">Kontakt</a></li>
	     </ol>
		 
	   </div>
	  <div id="content">
	    
		  <h3><a id="Pulp_Fiction">Pulp Fiction</a></h3>
		   <img class="foto" src="img/002.jpg"  alt="Pulp Fiction">
		  <p>
             Trzy historie przedstawione w niechronologiczny sposób łączące się jednak w spójną całość, śmietanka doskonałych aktorów, niebanalne dialogi, które zapadają w pamięć, a także rzadko spotykany humor głównych bohaterów czynią specyficzny klimat tego filmu. Quentin Tarantino właśnie dzięki swemu nowatorskiemu dziełu wypłynął z podziemi reżyserskiego świata i stał się jednym z najbardziej cenionych reżyserów na globie. 
			 </p>
              <p>
			  "Pulp Fiction" to film prawdziwy mimo niektórych scen, które wydają się niemożliwe, mimo bohaterów, którzy, jak nam się wydaje, nie mogą istnieć, i mimo fikcji w samym tytule. W filmie nic nie jest koloryzowane czy upiększane tak jak w większości współczesnych dzieł kinematografii. Dialogi bohaterów wnoszą do filmu nutkę filozofii; filozofii bardzo łatwej w odbiorze poprzez specyficzny sposób przekazu, która w największej ilości objawia się w końcowych scenach filmu (np. podczas rozmyślań Julesa nad swoim życiem). 
			  </p>
			  <p>
			  Aktorzy doskonale wczuli się w swoje role. Każdy wykreował postać żyjącą własnym życiem, ale przecież Tarantino wybierał na swych bohaterów ludzi najlepszych z najlepszych, a więc, czy można się było spodziewać czegoś innego aniżeli wspaniałej gry – chyba nie. 
			  </p>
			  <p>
			 Muzyka, muzyka, muzyka. Ścieżka dźwiękowa w "Pulp Fiction" jest jeszcze jednym, dużym atutem filmu. Wspaniałe przeboje doskonale współgrające z toczącą się akcją są znakiem firmowym nie tylko "Pulp Fiction", ale większości filmów Quentin Tarantino (np. "Wściekłe psy"). W sountracku znalazły się takie przeboje jak: „Girl, You’ll be a women soon”, „Son of a preacher man” czy “Flowers on the wall”. 
			  </p>
			  <p>
			  Film uznany przez krytyków za kultowy,nowatorskie rozwiązania i ponadczasowe dialogi tworzą z niego dzieło sztuki, a zastanówmy się czymże jest sztuka… sztuka to fikcja! 
			  </p> 
		   <h3><a id="Skazani_na_Shawshank">Skazani na Shawshank</a></h3>
		  <img class="foto" src="img/003.jpg"  alt="Skazani na Shawshank">
		  <p>"Skazani na Shawshank" zaczynają się w momencie, gdy główny bohater - Andy Dufresne, młody bankier, zostaje skazany na podwójne dożywocie za zabicie żony i jej kochanka, w tytułowym więzieniu Shawshank. Już pierwsze chwile pobytu w Shawshank okazują się ciężkie. Naczelnik i strażnicy więzienni są nastawieni na bicie i kary w postaci siedzenia w zamkniętym pomieszczeniu. Inni więźniowie także nie ułatwiają życia nowym. Mimo to Andy odnajduje się w więziennym życiu - dzięki umiejętnościom nabytym przed skazaniem, pomaga kolegom, strażnikom, naczelnikowi, a nawet organizuje pieniądze na bibliotekę. Zaczyna dostawać coraz lepsze role w więzieniu - najpierw pracuje w pralni, potem pomaga bibliotekarzowi Brooksowi, w końcu zaczyna pracę w biurze u samego naczelnika. Jednak nikt nie wie, jaki ma plan ucieczki. </p>
		  <p>Najciekawszą rolą w filmie jest zdecydowanie Red, kumpel Andy'ego, grany przez Morgana Freemana. Red jest starym i dobrze znanym więźniem w Shawshank. Gdy ktoś chce zdobyć jakiś towar, w postaci papierosów czy zwykłych przedmiotów, zwraca się właśnie do niego. Ma w więzieniu swój autorytet. Jak sam siebie nazywa, jest "jedynym winnym w Shawshank", ale i jednym z niewielu, którzy marzą o wolności i dążą do jej uzyskania. Widzi zapał Andy'ego, pomaga mu i w końcu staje się jego najlepszym przyjacielem. Freeman wydaje się niemal stworzony do tej roli, doskonale wkomponowuje się w bycie "człowiekiem, który w więzieniu wszystko załatwi", ale nie poradzi sobie na wolności. Od początku widz lubi Reda i życzy mu jak najlepiej.</p>
		  <p>Cały film trzyma widza w napięciu i pasjonuje. Wszystkie wyżej wymienione cechy oraz dobre zdjęcia i trafna muzyka (nie odgrywa ona w filmie większej roli, ale buduje napięcie i w połączeniu z więziennymi odgłosami, takimi jak dźwięk zamykanej celi, tworzy dobry background) dają nam doskonały film.
		  </p>
		  <h3><a id="Podziemny_krag">Podziemny krąg</a></h3>
		  <img class="foto" src="img/004.jpg"  alt="Podziemny krąg">
		  <p>W tym filmie wszystko wydaje się pomieszane. Normalne życie z nocnym, normalni ludzie z psychopatami, a jawa cały czas wydaje się nam snem. W pewnym momencie musimy tak bardzo skupiać się na seansie, że pozostajemy obojętni na wszystko, co się wokół nas dzieje. Nie radzę go oglądać przy włączonym ekspresie do kawy. To jest jego największa zaleta: wciąga do cna. Oglądając obraz, miałem wrażenie, że Norton i Pitt zaraz wyjdą do mnie z ekranu. Albo że ja przeniosę się do nich.</p>
		  <p>Kolejnym atutem produkcji są fantastyczne dialogi, a niektóre cytaty są wręcz poetyckie, szczególnie te wypowiadane przez Tylera. Świetnym też okazał się pomysł, żeby główny bohater wcielił się w rolę narratora. Jego komentarze są ironiczne, okraszona potężną dawką czarnego humoru, niesamowicie spokojne, chociaż na ekranie dzieją się rzeczy, które przyprawiają widza o gęsią skórkę. Szczególnie jest to widoczne podczas walk w tytułowym Kręgu. Krew leje się z twarzy, zęby, powybijane, walają się po podłodze, a głos narratora nie zmienia się nawet o jeden ton. I ani przez chwilę nie wyczuwamy w nim jakichkolwiek emocji. A co najważniejsze, ta powolna narracja nie staje się w trakcie filmu nużąca. Wręcz przeciwnie. 
		  </p>
		  <p>O fabule. Główny bohater, grany przez znakomitego Edwarda Nortona, cierpi na bezsenność. Jest całkowicie rozczarowany i znudzony swoją monotonną egzystencją. Do czasu, gdy spotyka dziwnego mężczyznę, podczas podróży samolotem. Nieznajomy przedstawia się jako Tyler Durden (Brad Pitt, kolejna świetna kreacja u Finchera). Kieruję się w życiu dziwną filozofią - dąży do samodestrukcji. I kiedy mieszkanie Narratora zostaje zniszczone, wprowadza się właśnie do Tylera. Wkrótce obaj mężczyźni, odkrywszy, że fizyczny ból sprawia im satysfakcję, organizują cotygodniowe walki, które systematycznie przyciągają rzesze spragnionych bólu mężczyzn. Powstaje nielegalny klub, zwany "Podziemnym Kręgiem". Wkrótce potem działalność klubu przybiera postać tajnej organizacji, która powoli przeistacza się w groźną grupę terrorystyczną... </p>
		  
		  <h3><a id="Siedem">Siedem</a></h3>
		  <img class="foto" src="img/005.jpg"  alt="Siedem">
		  <p>William Somerset (Morgan Freeman) i David Mills (Brad Pitt) są policjantami z jednego oddziału. Mills mieszka wraz z żoną w małym mieszkaniu i bez reszty oddaje się pracy. Somerset jest samotny i nie przepada za towarzystwem. Powierzona im zostaje sprawa dziwnego morderstwa. Ofiarą jest przerażająco otyły mężczyzna, w którego domu znaleziono napis "obżarstwo". Cichy, apatyczny i melancholijny Somerset z początku nie dogaduje się z dużo młodszym, skorym do działania i porywczym Millsem. Obaj nie mają jednak nawet cienia dowodu w sprawie morderstwa. Dopiero następne zabójstwo dokonane na znanym i bogatym adwokacie, w którego biurze na podłodze pozostawiono napis "chciwość", każe obu policjantom połączyć obie zbrodnie. Somerset zakłada teorię grzechów głównych, którymi kieruje się zabójca. Starszy policjant będzie musiał  połączyć swoje logiczne myślenie z zapałem kolegi w celu złapania przestępcy. Schwytanie go jednak będzie dużo trudniejsze niż obaj z początku myśleli... 
		  </p>
		  <p>Morderca-fanatyk, do tego ponadprzeciętnie inteligentny, sam wymierza sprawiedliwość, zabijając kolejnych ludzi. Policja jest wobec niego bezsilna, jego morderstwa można by uznać za zbrodnie doskonałe, on sam uważa siebie za wybawcę ludzkości. Prowadzi z poszukującymi go policjantami pewnego rodzaju grę, w której ten, który zostanie złapany,  niekoniecznie jest przegranym. 
		  </p>
		  <p>Realizm przedstawionych wydarzeń, opuszczone pomieszczenia amerykańskich budynków, miasto skąpane w strugach deszczu, bezradność stróżów prawa, śmierć, rozpacz, zaskoczenie, zawziętość, zagadka... - oto klimat tego wspaniałego filmu. Niby wszystko to jest nam doskonale znane, a jednak wydaje się nowe, niedostępne i odległe. Krwawa historia kryminalisty i łamigłówka religijna: kontrast między zbrodniczymi czynami Johna Doe, a jego uduchowieniem i oddaniem wyznawanej przez siebie idei. Bohater oryginalny i tajemniczy, który znacząco wpływa na przekazywany obraz. </p>
		
		  
		  <h3><a id="Django">Django</a></h3>
		  <img class="foto" src="img/006.jpg"  alt="Django">
		  <p>Historia zaczyna się, kiedy grupa niewolników skutych kajdanami i ich właściciele spotykają dr. Kinga Schultza, przemieszczającego się po Ameryce w pojeździe ze śmiesznym, dyndającym na dachu zębem (Schultz jest byłym dentystą). Schultz chce kupić tytułowego bohatera, który ma mu pomóc w rozpoznaniu poszukiwanych przez niego braci Brittle – awanturników i zabójców, którzy pracują aktualnie na plantacji, na której miał nieprzyjemność przebywać swego czasu Django.
		  </p>
		  <p>W ten sposób wyzwolony „nigger” i niemiecki doktor stają się duetem łowców głów. „Zabijać białych za pieniądze? Co ma się w tym nie podobać?”, odpowiada Django zachęcany przez Schultza do włączenia się w jego działalność. Tak zaczyna się współpraca, która Schultzowi ma przynieść pieniądze, a wyzwolonemu Django – odzyskanie żony.
		  </p>
		  <p>Najlepsza scena? Chyba najbardziej zachwycił groteskowy finał pościgu, w którym grupa facetów z zakrytymi twarzami burzy się, bo przez źle wycięte otwory na oczy nic nie widzą i odmawiają udziału w akcji…
		  </p>
		  <p>Trudno stwierdzić od razu, kto wypadł ciekawiej: Schultz grany przez Waltza, tytułowy bohater, zachowujący zimną krew w najtrudniejszych momentach, czy Samuel L. Jackson w roli prawdziwie… czarnego charakteru…
		  </p>
		  <p>Film jest majstersztykiem i nawet jeśli sama fabuła nie przypadnie komuś do gustu, będzie musiał przyznać, że scenariusz i budowanie napięcia, a także (przede wszystkim!) surrealistyczne rozmowy bohaterów są niezwykle wymyślne. Ach, i jeszcze ścieżka dźwiękowa! Klimaty Ennio Morricone obok raperskich kawałków! Brawo! </p>
		  <button id="psycisk_czcionka1" onclick="zmienstyl1();">color tła</button>
		  <button id="psycisk_czcionka2" onclick="zmienstyl2();">color tła</button>
		   <div>
	  <p class="text_liczniki">Czas pszebywania na stronie:</p>
	  <div id="timer" style="padding-top:16px; padding-left:3px;"></div> 
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