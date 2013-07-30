<?php
include("build/config/config.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php echo $siteName;?></title>
<meta name="description" content="Independently published poetry, art, and music from the San Francisco Bay area. Featuring Eric Victorino, The Limousines, Strata, Balancing the Lion.">
<meta name="author" content="Orchard City Books and Noise, Eric Victorino">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--[if IE]>
        <link rel="stylesheet" href="css/ocbnStyleIE.css"/>
    <![endif]-->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<script src="js/libs/contentflow.js"></script>
<link rel="stylesheet" href="css/contentflow.css"/>
<link rel="stylesheet" href="css/style.css"/>
</head>
<body>
<div id="container">
  <?php
  topNav($pagename);
  ?>
  <div id="main" role="main"> 
    <!--it's coverflow!-->
    <div class="ContentFlow" id="contentFlow">
      <div class="loadIndicator">
        <div class="indicator"></div>
      </div>
      <div class="flow">
        <div class="item"> <img class="content" src="img/coverflow/theLimousines.jpg" alt="The Limousines"/>
          <div class="caption">The Limousines</div>
        </div>
        <div class="item"> <img class="content" src="img/coverflow/comaTherapy.jpg" alt="Coma Therapy" />
          <div class="caption">Eric Victorino - Coma Therapy</div>
        </div>
        <div class="item"> <img class="content" src="img/coverflow/shadowsForSunshine.jpg" alt="Trading Shadows for Sunshine" />
          <div class="caption">Eric Victorino - Trading Shadows for Sunshine</div>
        </div>
        <div class="item"> <img class="content" src="img/coverflow/getSharp.jpg" alt="Get Sharp" />
          <div class="caption">The Limousines - Get Sharp</div>
          <!--default,3--> 
        </div>
        <div class="item"> <img class="content" src="img/coverflow/strata.jpg" alt="Sleep" />
          <div class="caption">Strata - Sleep</div>
        </div>
      </div>
      <div class="globalCaption"></div>
      <div class="scrollbar">
        <div class="slider"></div>
      </div>
    </div>
    <!--fallback-->
    <div id="cfFallBack">
     <a href="http://itunes.apple.com/us/album/trading-shadows-for-sunshine/id412764166"><img src="img/coverflow/shadowsForSunshine.jpg" alt="Trading Shadows for Sunshine"></a>
     <br />
      <span class="mobileCaption"><a href="http://itunes.apple.com/us/album/trading-shadows-for-sunshine/id412764166">Listen Now</a></span>
    </div>
    <div id="leftFeatured">
		 <?php
            featureArea1();
        ?>
    </div>
    <div id="rightCol">
     
      <div id="mainContent"> 
		<?php
			mainContent();
		?>
      </div>
      
      <div class="tuneCore">
     	<?php
			audioBooks();
		?>
      </div>
  </div>
  <footer>
    <p><a href="#">HOME</a> :: <a href="#">ARTISTS</a> :: <a href="#">BOOKS</a> :: <a href="#">STORE</a> :: <a href="#about">ABOUT</a> :: <a href="#">CONTACT</a> <br />
      <br />
      &copy;2011 Orchard City Books and Noise</p>
    <div id="bottomSoc"> 
    	<img src="img/fb.png" width="32" height="32" alt="Facebook"> 
        <img src="img/youTube.png" width="32" height="32" alt="YouTube"> 
        <img src="img/g-plus-icon-32x32.png" width="32" height="32" alt="Google Plus"> 
        <img src="img/twitter.png" width="32" height="32" alt="Twitter"> 
    </div>
  </footer>
  <br />
</div>
<!--! end of #container --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/plugins.js"></script>

</body>
</html>