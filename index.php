<?php 
include("/home/bitbyte/public_html/build/config/config.php");
$dbUtil=new dbUtil;
$dbUtil->dbConnect();
if(isset($_POST['submitNewsletter'])){
			if($_POST['subscriberEmail']!=""){
				$SQL="SELECT subscriberEmail from tblSubscriber WHERE subscriberEmail='".mysql_real_escape_string($_POST['subscriberEmail'])."' AND unsubscribeDate=0";
				$rs=mysql_query($SQL);
				if($rs && mysql_num_rows($rs)>=1){
					$error[1]="newsletterHome";
					$existingerror=true;
				}
				else{
					$error=$dbUtil->validateForm($_POST,"newsletterHome","tblSubscriber");
				}
			} 	
			else{
					$error=$dbUtil->validateForm($_POST,"newsletterHome","tblSubscriber");
			}		
}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Bit Byte Media</title>
  <meta name="description" content="Bit Byte Media is a full-service web and mobile development company serving Canton, Akron, Massillon, and Alliance Ohio, as well as worldwide clients.">
  <meta name="author" content="bitbytemedia.com">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="icon" 
      type="image/icon" 
      href="http://www.bitbytemedia.com/favicon.ico">
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="/css/style.css">
  <!-- end CSS-->
  <script src="/js/libs/modernizr-2.0.6.min.js"></script>
  <!-- for addthis -->
  <script type="text/javascript" src="http://apis.google.com/js/plusone.js">
  {lang: 'ru'}
  </script>
  <script type="text/javascript">
    var addthis_config = {"data_track_clickback":true};
	</script>
	<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e8c82eb37f7790a"></script>
	<!-- slider -->
    <link rel="stylesheet" href="/css/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/coin/coin-slider-styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/buttons/buttons.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <!-- <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />-->
    <!--[if IE]>
        <link rel="stylesheet" href="css/bbmStyleIE.css"/>
    <![endif]-->
</head>
<body id="home">
	<?php 
		headerNav();
		topNav();
	?>
	<section id="content-wrapper">
		<div id="main-feature-wrapper" class="clearfix">
			<div class="feature">
				<div class="feature-content">
					<h1>Web Development, at its Finest!</h1>
					<p><strong>Bit Byte Media</strong> is a full service web design, web development, and digital marketing company located in the greater Northeast Ohio region. We offer everything you could ever need, all under one roof. Our unique team approach offers the best in web design, custom web development, custom programming, social media, user experience, and web marketing. <strong>Whatever you need, we've got you covered!</strong></p>
				</div>
                <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <!-- AddThis Button END -->
                <br />
                <div class="slider-wrapper theme-orman">
                    <div class="ribbon"></div>
                    <div id="slider" class="nivoSlider">
                        <img src="/images/design-flowchart.jpg" height="268" width="568" alt="seo services" />
                        <img src="/images/seo.jpg" height="268" width="568" alt="programming services" />
                        <img src="/images/takeByte.jpg" height="268" width="568" alt="design services" />
                    </div>
               <!-- <div class="paging">
                    <a href="#" rel="1">1</a>
                    <a href="#" rel="2">2</a>
                    <a href="#" rel="3">3</a>
                    <a href="#" rel="4">4</a>
                </div>-->
                </div> <!-- slider -->
            </div><!-- feature END -->
		</div>
		<br class="clearfix" />
		<section id="content" class="clearfix">
			<div class="module-wrapper clearfix">
			<div class="module first-mod">
				<header>
					<h2><img src="/images/computer-icon.jpg" height="40" width="40" alt="computer icon" class="title-icon" /> We love the web!</h2>
					<h3>Bringing Web Standards Back</h3>
				</header>
				<article>
					<p>We value web standards and the latest trends and technologies. Our goal is to supply quality web applications to our happy clients.</p>
					<p>We can help you develop the best unique solution for your needs - on time and at a price you can afford.</p>
				</article>
			</div>
			<div class="module">
				<header>
					<h2><img src="/images/new.jpg" height="40" width="40" alt="new icon" class="title-icon" /> What's New?</h2>
					<h3>Find out the latest news...</h3>
				</header>
				<article>
					<p>We're proud to announce the launch of our new website! Check back often for more changes and updates. Feel free to sign up for our mailing list to be notified of any major updates, specials, and more!</p>
                    <?php
	
					echo "
					<div id=\"newsletterHome\">";
					 if(isset($newsError)) { //If errors are found 	
						echo "<p class=\"error\">Please make sure you fill out the form using valid information. Thanks.</p>";
					 }
					 elseif($existingerror!=""){
						echo "<p class=\"error\">Sorry, you have already signed up for our newsletter with that email.</p>";
					 }
					else if($_POST['submitNewsletter']!=""){
						echo "<p class=\"error\">Thanks for signing up. You will receive a confirmation email.</p>";
					}
					echo "<form method=\"post\" action=\"".$_SERVER['PHP_SELF']."\" id=\"newsForm\">
					<p><label for=\"subscriberName\">Your Name</label><br /><input type=\"text\" name=\"subscriberName\" id=\"subscriberName\" value=\"".$_POST['subscriberName']."\" class=\"required\"/></p>
					<p><label for=\"subscriberEmail\">Email</label><br /><input type=\"text\" name=\"subscriberEmail\" id=\"subscriberEmail\" value=\"".$_POST['subscriberEmail']."\" class=\"required\" /></p>
					<input type=\"submit\" name=\"submitNewsletter\" value=\"Submit\" id=\"newsSubmit\" class=\"button small green home\" />
					</form>\n
					</div>";
					?>
				</article>
			</div>
			<div class="module last-mod">
				<header>
					<h2><img src="/images/award.jpg" height="40" width="40" alt="featured icon" class="title-icon" /> Featured Project</h2>
					<h3>Be sure to check out our portfolio.</h3>
				</header>
				<article>
					<p id="featuredClient"><a href="/portfolio#gallery" title="Your Preps - Bit Byte Media Featured Client"><img src="/images/featuredThumb2.jpg" width="186" height="231" alt="Your Preps - Bit Byte Media - Featured Client" /></a>Our featured and most recent project is the website for Your Preps, a web service aimed at helping individuals and families prepare for life's unexpected events. Your Preps uses the latest technologies, creating a prepping portal for its users.<a href="/portfolio#gallery" title="bit byte media portfolio">See our work for Your Preps here.</a></p>
				</article>
			</div>
			</div>
			<div class="module-wrapper clearfix">
			<div class="module first-mod">
				<header>
					<h2><img src="/images/quote.jpg" alt="quote icon" height="40" width="40" class="title-icon" /> Get a Quote</h2>
					<h3>Convinced yet?</h3>
				</header>
				<article>
					<p class="larger-text">Professional, Affordable, Customer Focus, and Results-Driven</p>
					<a href="/contact" title="Contact Us for a Free Quote" class="button medium green"><strong>Contact Us to Get a FREE Quote</strong><br /><small>Fill Out the Form or Give Us a Call</small></a>
				</article>			
			</div>
			<div class="module double-mod">
				<header>
					<h2><img src="/images/smile.jpg" alt="smile icon" height="40" width="40" class="title-icon" /> Look no further!</h2>
					<h3>We're the best! Around!</h3>
				</header>
				<article>
					<p></p>
					<p>Don't hesitate to contact us for a quote or more information. Whatever services you need, we've got it all under one roof:</p>
					<ul class="services">
						<li>Website Design</li>
						<li>Website Development</li>
						<li>Content Management System (CMS)</li>
						<li>Custom Programming</li>
						<li>Website Optimization</li>
						<li>SEO &amp; SEM</li>
						<li>Mobile Development</li>
                        <li>Branding</li>
						<li>Usability</li>
						<li>E-Commerce Solutions</li>
						<li>Social Media</li>
						<li>...and <em>many more</em>....</li>
					</ul>
				</article>
			</div>
			</div>
		</section>
		<?php footerNav();?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
	<!-- slider -->
	<script type="text/javascript" src="/coin/coin-slider.js"></script>
	<script>$(document).ready(function() {
        $('#slider').coinslider({ hoverPause: false });
    });
    </script>
    <script type="text/javascript">
$(document).ready(function(){
	$("#newsForm").validate();
});
</script>
  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="/js/plugins.js"></script>
  <script src="/js/script.js"></script>
  <!-- end scripts-->
  
	<?php 
	//this creates a nice little scroll down to the right form
	//without javascript on, degrades gracefully
	if($error!=""){
		echo "<script type=\"text/javascript\">";
		echo "		goToByScroll('".$error[1]."')";
		echo "</script>";
        }
        ?>

  <script> // Change UA-XXXXX-X to be your site's ID
    window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
    Modernizr.load({
      load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
    });
  </script>

	
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>
