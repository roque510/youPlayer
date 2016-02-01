<?php
require_once("funciones.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="css/style.css" />

    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>YouPlayer | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link type="text/css" href="css/themicons.css" rel="stylesheet" media="all">
    <link type="text/css" href="css/stylea.css" rel="stylesheet" media="all">
    <link href="css/flat.audio.css" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:600' rel='stylesheet' type='text/css' />


    
    

   <link href="dist/skin/blue.monday/css/jplayer.blue.mondayd.css" rel="stylesheet" type="text/css" />

  
</head>
<body class="bg" style="z-index: 0;">



<div class="row player" >

<h1 class="htopbanner">Musicon</h1>

<div class="row" style="padding-top:10px; margin-left:0px; height:10%; border-top-left-radius:25px; border-top-right-radius:25px; width:100%; background-color: rgba(3, 63, 119, 0.49); ">
  <div class="shy-menu large-1" style="margin-top:-10px;">
    <a class="shy-menu-hamburger ">
      <span class="layer top"></span>
      <span class="layer mid"></span>
      <span class="layer btm"></span>
    </a>

    <div class="shy-menu-panel">
      <ul class="">
      <br>
        <div class=""><li><i class="fi-rss style2"></i><a href="?g=emisoras"  style="font-size:18px !important;" class="menuOptions htopbanner">    Emisoras</a></li></div>
        
        <div class=""><li><i class="fi-music style2  "></i><a href="?g=musica" style="font-size:18px !important;" class="menuOptions htopbanner">    Musica</a></li></div>
        
        <div class=""><li><i class="fi-play-video style2  "></i><a href="?g=youp" style="font-size:18px !important;" class="menuOptions htopbanner">   YouPlayer</a></li></div>
        <br class="show-for-small-only">
        <div class="show-for-small-only"><li><i class="fi-star style2  "></i><a href="#" style="font-size:20px !important;" class="menuOptions htopbanner">   Top</a></li></div>
        <div class="show-for-small-only"><li><i class="fi-burst-new style2  "></i><a href="#" style="font-size:20px !important;" class="menuOptions htopbanner">   Nuevas</a></li></div>
        <div class="show-for-small-only"><li><i class="fi-pricetag-multiple style2  "></i><a href="#" style="font-size:20px !important;" class="menuOptions htopbanner">   Sugerido</a></li></div>
        <div class="show-for-small-only"><li><i class="fi-target-two style2  "></i><a href="#" style="font-size:20px !important;" class="menuOptions htopbanner">   Genero</a></li></div>
      </ul>
    </div>  	
  </div>


	<div class="large-offset-1 large-1 medium-offset-1 medium-1 small-offset-2 small-4 columns" style="background-color: ; ">
		<img class="bigimg" src="img/search.svg">


	</div>
	 <div class="large-2 medium-3 pull-2 small-5 columns " style="background-color: ;">
      
        <input style=" background-color: transparent; border: hidden; border-bottom: 4px solid black;" type="text" placeholder="Buscar Musica" />
      
    </div>
    <div class="large-7 medium-6 small-0 columns">
      
     <div class="button-bar hide-for-small-only" >
  		<div class=" expanded button-group ">
		    <a href="#" class="small button radiusL ">Top</a>
    		<a href="#" class="small button">Nuevas</a>
    		<a href="#" class="small button">Sugerido</a>
    		<a href="#" class="small button radiusR">Generos</a>
  		</div>  
	</div>
      
    </div>

    <div class="large-1 medium-1"></div>


</div>


<div class="row mainContent" style="margin-left:0px; height:80%; width:100%; background-color: rgba(0, 1, 19, 0.9);">
<div style="width:100%; height:95%; background-color:; overflow:auto;">





<?php
$page = "default";
if(isset($_GET['g']))
  $page = $_GET['g'];


switch ($page) {
  case 'emisoras':modulo('listaEmisoras');
    # code...
    break;
  case 'musica':modulo('musica');
    # code...
    break; 
  
  default:modulo('default');
    # code...
    break;
}



?>


</div>
</div>





<div class="row audioBar" style="padding-top:5px; padding-right:5px; padding-left:5px; margin-left:0px; height:80px; border-bottom-left-radius:25px; border-bottom-right-radius:25px; width:100%; background-color: rgba(3, 63, 119, 0.49);">
  
    <div class="responsive-wrapper">
  

<div id="musiconPlayer" class="jp-jplayer"></div>

<div id="jp_container_audio_1" class="jp-flat-audio" role="application" aria-label="media player">
  <div class="jp-play-control jp-control">
    <button class="jp-play jp-button" role="button" aria-label="play" tabindex="0"></button>
  </div>
  <div class="jp-bar">
    <div class="jp-seek-bar jp-seek-bar-display"></div>
    <div class="jp-seek-bar">
      <div class="jp-play-bar"></div>
      <div class="jp-details"><span class="jp-title" aria-label="title"></span></div>
      <div class="jp-timing"><span class="jp-duration" role="timer" aria-label="duration"></span></div>
    </div>
  </div>
  <div class="jp-no-solution">
    Media Player Error<br />
    Update your browser or Flash plugin
  </div>
</div>

</div>
		
</div>
 




<script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    
    
    <script type="text/javascript" src="js/mainplayer.js"></script>

    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.jplayer.js"></script>
<script type="text/javascript" src="js/flat.audio.js"></script>

    <!-- SPLAYER JSSSSSSSSSS-->



<script>
function GetInputValue () {
            var input = document.getElementById ("fileToUpload");
            var audio = document.getElementById('musica');

        var source = document.getElementById('sourceA');
        source.src=input.value;

        audio.load(); //call this to just preload the audio without playing
        audio.play(); //call this to play the song right away
        }

$(function() {
	
	initDropDowns($("div.shy-menu"));

});

function initDropDowns(allMenus) {

	allMenus.children(".shy-menu-hamburger").on("click", function() {
		
		var thisTrigger = jQuery(this),
			thisMenu = thisTrigger.parent(),
			thisPanel = thisTrigger.next();

		if (thisMenu.hasClass("is-open")) {

      		thisMenu.removeClass("is-open");
			
      		jQuery(document).off("click");                                 
      		thisPanel.off("click");

		} else {			
			
    		allMenus.removeClass("is-open");	
			thisMenu.addClass("is-open");
	
			jQuery(document).on("click", function() {
				allMenus.removeClass("is-open");
			});
			thisPanel.on("click", function(e) {
				e.stopPropagation();
			});
		}
		
		return false;
	});
}
</script>
</body>
</html>