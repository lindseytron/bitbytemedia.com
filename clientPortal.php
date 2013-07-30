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
if(isset($_POST['submit'])){
	$hasError=1;
	$error[1]="contact-wrapper";
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

  <title>Bit Byte Media | Client Portal </title>
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
						<h1><img src="/images/laptop.jpg" alt="Laptop" height="40" width="40" class="title-icon" />Client Portal</h1>
						<h3>Client Login</h3>
						<p>Are you interested in making a payment on your account? Want to manage your hosting? Just login using the username and password given to you.</p>
                        <div id="contact-wrapper">
				<?php if(isset($hasError)) { //If errors are found ?>
					<p class="error">Please make sure you fill out the form using valid information. Thanks.</p>
				<?php } ?>
				<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
					<p>My <label for="contactname"><strong>username</strong></label> is <input type="text" size="50" name="contactname" id="contactname" value="" class="required contactname" /> and my <label for="password"><strong>password</strong></label> is <input type="password" size="50" name="password" id="email" value="" class="required password" /></p>                
						<input type="submit" value="Login" name="submit" class="submit button small blue" />
					</form>
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
  	<script>window.jQuery || document.write('<script src="/js/libs/jquery-1.6.2.min.js"><\/script>')</script>
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
    <script src="///ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>