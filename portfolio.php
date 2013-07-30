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
<title>Bit Byte Media -  Portfolio - Web Development Canton, Akron Ohio</title>
<meta name="description" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- CSS concatenated and minified via ant build script-->
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/portfolio.css">
<!--handwriting font in port-->
<link href='http://fonts.googleapis.com/css?family=Just+Another+Hand' rel='stylesheet' type='text/css'>
<!-- end CSS-->
<script src="js/libs/modernizr-2.0.6.min.js"></script>
<!-- for addthis -->
<script type="text/javascript" src="http://apis.google.com/js/plusone.js">
  {lang: 'ru'}
  </script>
<script type="text/javascript">
    var addthis_config = {"data_track_clickback":true};
	</script>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4e8c82eb37f7790a"></script>
<!-- slider -->
<link rel="stylesheet" href="buttons/buttons.css" type="text/css" media="screen" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<!-- <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />-->
<!--[if IE]>
        <link rel="stylesheet" href="css/bbmStyleIE.css"/>
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
    <h1><img src="images/laptop.jpg" alt="laptop icon" height="40" width="40" class="title-icon" /> Portfolio</h1>
    <h3>Check out what we can do!</h3>
    <p>So...you wanna know what our work looks like? Here are just a few examples of web design work that we have done.  Collectively, we have each completed a ton of work but since we were working for other companies at the time we can't show you those here. But we have experience with custom shopping carts, off-the-shelf products such as Drupal, WordPress, Joomla, Magento, and others. In addition to the off-the-shelf systems, we have been working on a pretty neato content management system that allows for customization and search engine optimization.</p>
    <p>Our portfolio is growing all the time, check back soon for more examples.</p>
    <p id="mobileAdd"><strong>View this site on a larger device to view our portfolio.</strong></p>
    <div id="gallery">
      <div id="slides">
        <div class="slide"> <img src="images/portfolio/slides/YourPreps.jpg" width="320" height="387" alt="Your Preps Personalized Preparedness" class="left"/>
          <div class="portText">
            <h3>Your Preps</h3>
            <p>YourPreps is a prepping and preparedness startup, aimed at helping you prepare for life's possible disruptions. This website allows users to sign up and use the services, revealing a customizable dashboard to organize and manage your preps. You can view the live site at <a href="https://www.yourpreps.com/" title="Your Preps: Personalized Preparedness">https://www.yourpreps.com/</a></p>
            <p>Technologies Used:</p>
            <ul>
              <li>HTML5 and CSS</li>
               <li>Modern, simple, and responsive design</li>
              <li>Mobile friendly</li>
              <li>Custom blog skin</li>
              <li>PHP, Ruby on Rails</li>
              <li>jQuery and JavaScript</li>
            </ul>
          </div>
        </div>
        <div class="slide"> <img src="images/portfolio/slides/OCBN.jpg" width="320" height="387" alt="Orchard City Books and Noise" class="left"/>
          <div class="portText">
            <h3>Orchard City Books and Noise</h3>
            <p>This is a fun site created for a growing music, book, and art publishing company in Campbell, California.  This site includes a coverflow slideshow, streaming audio and video; all while being mobile friendly.  Watch for updates as we finish it and take it live.</p>
            <p>Technologies Used:</p>
            <ul>
              <li>PHP/MySQL</li>
              <li>HTML5 and Mobile Friendly Video</li>
              <li>jQuery and JavaScript</li>
            </ul>
          </div>
        </div>
     
        <div class="slide"> <img src="images/portfolio/slides/KulinaryKidz.jpg" width="320" height="387" alt="Kulinary Kidz"/>
          <div class="portText">
            <h3>Kulinary Kidz</h3>
            <p>This is a site that includes recipes that are fun for kids to make.  It includes recipe submission, user interaction via a recipe commenting form, and general cooking tips.</p>
            <p>Technologies Used:</p>
            <ul>
              <li>PHP/MySQL</li>
              <li>Custom Content Management System</li>
              <li>jQuery and JavaScript</li>
            </ul>
          </div>
          <div class="slide">
            <div class="portTextRight">
              <h3>My How to Make Money Page</h3>
              <p>This is a site for a client who wanted to share his ideas on how to make money. This site also includes a shopping cart for users to buy lists and other articles.</p>
              <p>Technologies Used:</p>
              <ul>
                <li>PHP/MySQL</li>
                <li>WordPress</li>
              </ul>
            </div>
            <img src="images/portfolio/slides/howtoMakeMoney.jpg" width="320" height="387" alt="how to make money" class="right"/> </div>
          <div class="slide"> <img src="images/portfolio/slides/saveaDog.jpg" width="320" height="387" alt="Save a Pregnant Dog"/>
            <div class="portText">
              <h3>Save a Mom Dog Rescue</h3>
              <p>This is a non-profit that works to rescue unwanted pregnant dogs destined for euthanasia.</p>
              <p>Technologies Used:</p>
              <ul>
                <li>PHP/MySQL</li>
                <li>Custom Content Management System</li>
                <li>jQuery and JavaScript</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="slide"><img src="images/Spacer.gif" width="920" height="400" alt="side" /></div>
      </div>
      <div id="menu">
        <ul>
          <li class="fbar">&nbsp;</li>
          <li class="menuItem"><a href="">1</a></li>
          <li class="menuItem"><a href="">2</a></li>
          <li class="menuItem"><a href="">3</a></li>
          <li class="menuItem"><a href="">4</a></li>
          <li class="menuItem"><a href="">5</a></li>
          
        </ul>
      </div>
    </div>
  </div>
  
  <div class="sidebar" id="sidebar">
   <?php sideBarContact();?>
    
    <!-- AddThis Button BEGIN -->
    <div class="addthis_toolbox addthis_default_style addthis_32x32_style"> <a class="addthis_button_preferred_1"></a> <a class="addthis_button_preferred_2"></a> <a class="addthis_button_preferred_3"></a> <a class="addthis_button_preferred_4"></a> <a class="addthis_button_compact"></a> <a class="addthis_counter addthis_bubble_style"></a> </div>
    <!--mobile add this-->
    <div class="addthis_toolbox addthis_default_style mobileAdd"> <a class="addthis_button" ><img src="images/addThisMobile.gif" width="75" height="12" alt="Add This" id="mobileAdd"/></a> </div>
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
<script defer src="js/plugins.js"></script> 
<script src="js/script.js"></script> 
<script src="js/portfolio.js"></script> 
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