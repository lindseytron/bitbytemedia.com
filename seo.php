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

  <title>Bit Byte Media | Search Engine Optimization and Marketing</title>
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="/css/style.css">
  <!-- end CSS-->
  <script href="/js/libs/modernizr-2.0.6.min.js"></script>
  <!-- for addthis -->
  <script type="text/javascript" href="http://apis.google.com/js/plusone.js">
  {lang: 'ru'}
  </script>
  <script type="text/javascript">
    var addthis_config = {"data_track_clickback":true};
	</script>
	<script type="text/javascript" href="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e8c82eb37f7790a"></script>
	<!-- slider -->
    <link rel="stylesheet" href="/css/themes/orman/orman.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="/coin/coin-slider-styles.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="/buttons/buttons.css" type="text/css" media="screen" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
   <!-- <link rel="stylesheet" href="/css/nivo-slider.css" type="text/css" media="screen" />-->
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
						<h1><img src="/images/seo-icon.jpg" alt="seo icon" height="40" width="40" class="title-icon" /> Search Engine Optimization</h1>
						<h3>How can my business increase traffic to the website?</h3>
						<p>Search Engine Optimization (SEO) is the process of placing a website higher in the result set of search engines such as Google and Bing. We offer full-service SEO that includes pay-per-click campaign management, organic SEO, link building, good site structure (built into <em>every</em> site at no cost), PR campaigns, and leveraging social media sites.  
						</p>
						<h2>Natural SEO</h2>
						<h3>How much should I pay for natural SEO?</h3>
						<p>Many companies overcharge for natural SEO services.  Here's the deal: no one can promise you #1 organic rankings, no one knows Google's algorithm, and no one knows, "special tricks" to get your site to rank higher.  We can provide an honest, straight-forward approach to SEO, no smoke and mirrors.  We understand how Google and Bing rank sites and what they look for when placing websites in the user's result set, a basic understanding that many web development companies lack.</p>
						<h2>Pay-per-click SEO</h2>
						<h3>...is it important?</h3>
						<p>Pay-per-click campaigns involve setting up a budget with Google, Bing, or other sites.  When a user clicks ads that are placed on the sites for your company, they are directed to your site and you are charged a fee. This method can be very helpful to new sites, or to sites that do not have a good natural structure.  We can help manage your pay-per-click campaign to make sure that your money is not wasted.  We will help you determine what keywords you should bid for to achieve the best results.</p>
                        <h2>Social Media Marketing</h2>
                        <h3>How does it fit into SEO?</h3>
                        <p><a href="/social" title="Social Media">Social Media</a> plays a huge role in SEO. We will integrate social media into your search engine optimization efforts in order to drive more traffic to your site.  We love the social media sites and we are well educated in how to use these sites to your advantage!</p>
                        <h2>Link Building</h2>
                        <h3>Why do I need links to drive traffic to my site?</h3>
                        <p>Link building is a key aspect of search engine optimization.  Every link on the web basically counts as a vote for your site.  Links from high authority sites (well-respected sites) count for even more votes. We will work with you to build links to your site and help you manage what sites are linking to yours.</p>
						<a class="button big blue" title="Contact Us for a Free Quote" href="/contact"><strong>Don't Hesitate, Contact Us! >></strong><br /><small>Contact us about your latest project needs.</small></a>
						<br />
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

	<script href="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script href="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
  	<script>window.jQuery || document.write('<script href="/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript">
$(document).ready(function(){
	$("#contactform").validate();
});
</script>
  <!-- scripts concatenated and minified via ant build script-->
  <script defer href="/js/plugins.js"></script>
  <script href="/js/script.js"></script>
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
    <script href="///ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>