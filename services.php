<?php
include("/home/bitbyte/public_html/build/config/config.php");

$dbUtil=new dbUtil;
$dbUtil->dbConnect();
//if newsletter submitted, this needs to be on every page
if(isset($_POST['submitNewsletter'])){
			if($_POST['subscriberEmail']!=""){
				$SQL="SELECT subscriberEmail from tblSubscriber WHERE subscriberEmail='".mysql_real_escape_string($_POST['subscriberEmail'])."' AND unsubscribeDate=0";
				$rs=mysql_query($SQL);
				if($rs && mysql_num_rows($rs)>=1){
					$error[1]="newsletter";
					$existingerror=true;
				}
				else{
					$error=$dbUtil->validateForm($_POST,"newsletter","tblSubscriber");
				}
			} 	
			else{
					$error=$dbUtil->validateForm($_POST,"newsletter","tblSubscriber");
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

  <title>Bit Byte Media | Services</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
    <!--[if IE]>
        <link rel="stylesheet" href="/css/bbmStyleIE.css"/>
    <![endif]-->
	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23085061-1']);
  _gaq.push(['_setDomainName', 'none']);
  _gaq.push(['_setAllowLinker', true]);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body id="secondary">
<?php
	innerHeader();
?>
	<section id="content-wrapper">
		<section id="content" class="clearfix">
			<div class="main-content">
						<h1><img src="/images/services-icon.jpg" alt="services icon" height="40" width="40" class="title-icon" /> Our Services</h1>
						<h3>We'd love to help you!</h3>
						<p>Bit Byte offers a wide range of high quality services for our diverse customer base, from the individual, to small businesses, to large corporations. 
						</p>
						<div class="service">
							<a href="/web" title="Web"><img src="/images/web.gif" alt="web services" height="150" width="45" class="service-image" /></a>
							<h2>Web Design &amp; Development</h2>
							<p class="clearfix">Whether you need a custom e-commerce solution, intranet solution, micro sites, or just a simple place to post information to make it available online, our experienced and award-winning web development team will provide the right solution that is perfect for your needs. We offer a variety of web and online services, so be sure to check them out. We design and develop with usability in mind to promote not just a great website, but a great experience.</p>
							<p><a href="/web" title="More information on Web Services" class="purple">Read More</a><a href="/contact" title="Get a quote" class="purple">Get a Quote</a></p>
							
							</p>
						</div>
						<div class="service">
							<a href="/mobile" title="Mobile"><img src="/images/mobile.gif" alt="mobile services"  height="150" width="45" class="service-image" /></a>
							<h2>Mobile Applications</h2>
							<p class="clearfix">Ranging from mobile-friendly websites to custom applications and games, Bit Byte is just what you need. There is no doubt that the mobile industry is booming, and you don't want your business to be left behind. We provide mobile services for all major devices, including the iPad/iPhone/iPod, Android, various tablets, and more.</p>
							<p><a href="/mobile" title="More information on Mobile Services" class="green">Read More</a><a href="/contact" title="Get a quote" class="green">Get a Quote</a></p>
						</div>
						<div class="service">
							<a href="/social" title="Social Media"><img src="/images/social.gif" alt="social media services"  height="150" width="45" class="service-image" /></a>
							<h2>Social Media</h2>
							<p class="clearfix">Have you heard the latest buzz? Are you interested in utlizing social media to help build your online reputation or to increase your sales? Are you looking for more ways to help connect with your clients and customers? We can help with that! Not only do we offer professional social media consulting, but we can help to customize your social media experience. Custom Facebook landing pages and applications, twitter themes, and more.</p>
							<p><a href="/social" title="More information on Social Media Services" class="blue">Read More</a><a href="/contact" title="Get a quote" class="blue">Get a Quote</a></p>
						</div>
						<div class="service">
							<a href="/seo" title="SEO"><img src="/images/seo.gif" alt="search engine optimization services"  height="150" width="45" class="service-image" /></a>
							<h2>Search Engine Optimization (SEO)</h2>
							<p class="clearfix">Are you looking to increase the number of online visitors to your site? Well, how can you do that when Google doesn't even know who you are? We can help. Our search engine optimization (SEO) and search engine marketing (SEM) services are just what you need. It's not just smoke and mirrors here - we use proven organic search engine optimization techniques to drive targeted traffic to your website. </p>
							<p><a href="/seo" title="More information on SEO Services" class="yellow">Read More</a><a href="/contact" title="Get a quote" class="yellow">Get a Quote</a></p>
						</div>
						<div class="service">
							<a href="/consulting" title="Consulting"><img src="/images/consulting.gif" alt="consulting services"  height="150" width="45" class="service-image" /></a>
							<h2>Consulting</h2>
							<p class="clearfix">Just starting a business? Or are you looking for a new, creative way to represent your company? Look no further! We offer consulting services including brand identity, web reputation management, and more. Do you feel like you've got the next "big idea?" We can help you to design, develop, and manage your ideas, too!</p>
							<p><a href="/consulting" title="More information on Consulting Services" class="pink">Read More</a><a href="/contact" title="Get a quote" class="pink">Get a Quote</a></p>
						</div>
			</div>
			<div class="sidebar" id="sidebar">
             <?php sideBarContact();?>
            <!-- AddThis Button BEGIN -->
                <div class="addthis_toolbox addthis_default_style addthis_32x32_style">
                    <a class="addthis_button_preferred_1"></a>
                    <a class="addthis_button_preferred_2"></a>
                    <a class="addthis_button_preferred_3"></a>
                    <a class="addthis_button_preferred_4"></a>
                    <a class="addthis_button_compact"></a>
                    <a class="addthis_counter addthis_bubble_style"></a>
                </div>
                <!--mobile add this-->
                <div class="addthis_toolbox addthis_default_style mobileAdd">
                    <a class="addthis_button" ><img src="/images/addThisMobile.gif" width="75" height="12" alt="Add This" id="mobileAdd"/></a>
                </div>
                <!-- AddThis Button END -->
            <?php 
			newsletter($error[0],$existingerror);
			?>
			</div>
		</section>
		<?php 
		footerNav();
		?>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
  	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript">
$(document).ready(function(){
	$("#contactform").validate();
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