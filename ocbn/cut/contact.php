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
<title>Orchard City Books and Noise</title>
<meta name="description" content="Independently published poetry, art, and music from the San Francisco Bay area. Featuring Eric Victorino, The Limousines, Strata, Balancing the Lion.">
<meta name="author" content="Orchard City Books and Noise, Eric Victorino">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!--[if IE]>
        <link rel="stylesheet" href="css/ocbnStyleIE.css"/>
    <![endif]-->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<link rel="stylesheet" href="css/innerPageStyle.css"/>
<link rel="stylesheet" href="css/formStyle.css"/>
</head>
<body>
<div id="container">
  <?php
  topNav("contact");
  ?>
  <div id="main" role="main"> 
	<div id="leftCol">       
        <div id="mainContentInner">
          <h2>Contact Orchard City Books and Noise</h2>
          <div id="contactForm">
              <form action="#"> 
     
                    <fieldset id="user-details">			
             
                    <label for="name">Name</label>
                    <input type="text" name="name" value="" /> 
             
                    <label for="email">Email</label> 
                    <input type="email" name="email" value=""  /> 
             
                    <label for="phone">Phone</label> 
                    <input type="text" name="phone" value=""  /> 
             
                </fieldset><!--end user-details-->
             
                <fieldset id="user-message">
             
                    <label for="message">Your Message</label> 
                    <textarea name="message" rows="0" cols="0"></textarea> 
             
                    <input type="submit" value="Submit Message" name="submit" class="submit" />		
             
                </fieldset><!-- end user-message -->
             
            </form>
         </div>
        <div  style="clear:both;"></div>
      </div>
        <div id="leftFeaturedInner">
          <h2>Feature Area</h2>
          <p>I am some featured text.I am some featured text.I am some featured text.I am some featured text.I am some featured text.
          I am some featured text.I am some featured text.I am some featured text.I am some featured text.I am some featured text.
          I am some featured text.I am some featured text.I am some featured text.</p>
        </div>
    </div>
    <div id="rightCol">     
    
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