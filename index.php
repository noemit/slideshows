<?php /**/ ?><?php
  $quotes[] = "Life has been your art. You have set yourself to music. Your days are your sonnets. &#151; <i>Oscar Wilde</i>";
  $quotes[] = "The freedom we are looking for is the freedom to be ourselves, to express ourselves. &#151; <i>Don Miguel Ruiz</i>";


  srand ((double) microtime() * 1000000);
  $random_number = rand(0,count($quotes)-1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<link href='http://fonts.googleapis.com/css?family=Lato:100,800' rel='stylesheet' type='text/css'>
	<title>slideshows</title>
	<!-- Stylesheet -->

	<link rel="stylesheet" type="text/css" href="css/style.css" />

	<!-- JavaScript codes -->
	<script src="js/jquery-1.4.2.min.js" type="text/javascript"></script>
	<script src="js/jquery.fullscreenr.js" type="text/javascript"></script>
	<script src="js/jqFancyTransitions.min.js" type="text/javascript"></script>
	<script src="js/jquery.scrollTo-min.js" type="text/javascript"></script>
	<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
	<script src="js/jquery.color.js" type="text/javascript"></script>
		<script type="text/javascript">
				var currSlide;

				jQuery.fn.fadeToggle = function(speed, easing, callback) {
				   return this.animate({opacity: 'toggle'}, speed, easing, callback);
				};

				function CreateBookmarkLink() {
					title = "sli.desho.ws";
 					url = "http://sli.desho.ws";

 					if (window.sidebar) { // Mozilla Firefox Bookmark
						window.sidebar.addPanel(title, url,"");
					} else if( window.external ) { // IE Favorite
						window.external.AddFavorite( url, title); }
					else if(window.opera && window.print) { // Opera Hotlist
						return true; }
 					}


				// You need to specify the size of your background image here (could be done automatically by some PHP code)
				var FullscreenrOptions = {  width: 5024, height: 2775, bgID: '#bgimg' };
				// This will activate the full screen background!
				jQuery.fn.fullscreenr(FullscreenrOptions);

				function init() {
					$('.slide').css('height', $(window).height()+'px');
					$('.slide').css('width', $(window).width()+'px');
					$('#slides').css('width', ($(window).width()*$('.slide').size())+'px');
					$('.blurb-beta').css('height', $('.blurb-r').height()+'px');
				}

				function beta() {
					$('.blurb-beta').fadeToggle()
				}

				$(window).resize(function() {
					init();
					$('#container').scrollTo(currSlide);
				});

				$(document).ready(function(){
					init();
					currSlide = '#slide_intro';
					$('#container').scrollTo(currSlide);
				});

				/*
				function letsgo() {
					$('#mask').css('height', $(window).height()+'px');
					$('#mask').css('width', $(window).width()+'px');
					$('#mask').css('left', $(window).width()+'px');
					$('#mask').css('display', 'block');
					$("#mask").animate({
						left: '0px'
    				}, 1000, function() {
    					$(location).attr('href','welcome.html');
  				} );
				}*/

				function letsgo() {
					currSlide = '#slide_info';
					//$('#container').scrollTo(currSlide, 450, {easing:'easeOutSine', onAfter:function(){ $('.blurb-r').fadeIn('fast') }});
					$('#container').scrollTo(currSlide, 450, {easing:'easeOutSine'});
					//$('#footer').animate({ backgroundColor: "#000" }, 'slow');
					//$('#footer').animate({ color: "#fff" }, 'slow');
				}

		</script>

</head>
<script type="text/javascript">
  var rpxJsHost = (("https:" == document.location.protocol) ? "https://" : "http://static.");
  document.write(unescape("%3Cscript src='" + rpxJsHost +
"rpxnow.com/js/lib/rpx.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
  RPXNOW.overlay = true;
  RPXNOW.language_preference = 'en';
</script>
<body>
<div id="container">
<ul id="slides">
<li id="slide_intro" class="slide">
<img src="/img/bgbig.png" id="bgimg">
<div id="realBody">

<!--- logo & tagline --->
<div class="title">
<p class="small"><strong><span class="color1">pictures</span> + <span class="color2">sound</span> & <span class="color3">words</span></strong>: sli.desho.ws
<br><blockquote style="width: 600px;
padding-left: 100px;"><small><?=$quotes[$random_number]?></strong></blockquote></p>
</div>

<!--- let's go --->
<div class="letsgo">
<a href="#" onclick="letsgo(); return false;">&nbsp;</a>
</div>

</div>

<div id="mask" style="display:none; height: 1px; width:1px; background-color:white;position:absolute;z-index:9999"></div>

</li>

<li id="slide_info" class="slide" style="background-image: url(img/dodge2.gif);">
<div class="blurb">
	<p>create a <i>stylish</i> & <i>interactive</i> web site with ease</p>
</div>
<div class="blurb-r">
	<p><strong><i>sli.desho.ws</i></strong> gives you the freedom, direction, and simplicity to create a personalized home page, microsite, fan site, curriculum vit&aelig;, brand presence or just to let your creativity flow!</p>
	<p style="text-align:right;"><a href="#" onclick="beta(); return false;">Request a beta invite</a> &raquo;<br>
	<a href="welcome.html">See it in action</a> &raquo;</p>
</div>
<div class="blurb-beta">
<p>
	To be considered for the <strong><i>sli.desho.ws</i></strong> beta, provide your email:
	<br/>
	<span id="beta-form">
	<input class="txta" type="text" name="email"/> <input class="btn" type="submit" value="Let's go!" />
	</span>
</p>
<p>
	&laquo; <a href="#" onclick="beta(); return false;" >Nevermind</a>
</p>
</div>
</li>


</ul>
</div> <!--- container ends --->

<!--- bookmark at top --->
<div class="bookmark">
hey! welcome to<br>
<strong>sli.desho.ws</strong><br>
<a href="javascript:CreateBookmarkLink()">bookmark it!</a>
</div>

<!--- footer --->
<div id="footer">
		<div id="f-left">Copyright &copy; 2010 sli.desho.ws &#151; a <a target="blank" href="http://polyfx.com/">PolyFX</a> production</div>
		<div id="f-right"><a href="/">Home</a>  |  <a href="/satisfaction">Satisfaction</a>  |  <a href="/directory">Directory</a>  |   <a class="rpxnow" onclick="return false;"href="https://slideshows.rpxnow.com/openid/v2/signin?token_url=http%3A%2F%2Fsli.desho.ws%2Frpx.php"> Sign In </a> </div>
</div>
</body>
</html>