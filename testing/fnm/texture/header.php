<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" type="text/css" href="css/superfish.css" media="screen">
        <link rel="stylesheet" href="css/main.css">
        <!-- gallery -->
        <link href="css/photoswipe.css" type="text/css" rel="stylesheet" />
        <?php
        session_name("fancyform");
        session_start();
        $_SESSION['n1'] = rand(1,20);
        $_SESSION['n2'] = rand(1,20);
        $_SESSION['expect'] = $_SESSION['n1']+$_SESSION['n2'];


        $str='';
        if($_SESSION['errStr'])
        {
            $str='<div class="error">'.$_SESSION['errStr'].'</div>';
            unset($_SESSION['errStr']);
        }

        $success='';
        if($_SESSION['sent'])
        {
            $success='<h1>Thank you!</h1> <p>We will get back to you as soon as possible.</p>';
            
            $css='<style type="text/css">#contact-form{display:none;}</style>';
            
            unset($_SESSION['sent']);
        }
        ?>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
        <![endif]-->

        <!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->
        <div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div>
                        <div class="span5">
                            <img src="img/logo.gif" width="100%" alt="Flipped Normal Media logo" class="logo" />
                        </div>
                        <div class="span7">
                            <div class="row">
                                <form class="pull-right">
                                    <input type="text" class="search-query header-search" placeholder="Search" />
                                </form>
                            </div>
                            <div class="row">
                                <div class="pull-right">
                                    <a href="http://www.facebook.com/FlippedNormalMedia" title="Flipped Normal Media on Facebook"><img src="img/facebook-icon_off.jpg" alt="facebook icon" height="48px" width="48px" class="rollovers social-media-icons" /></a>
                                    <a href="http://www.linkedin.com/company/flipped-normal-media-llc." title="Flipped Normal Media on LinkedIn"><img src="img/linkedin-icon_off.jpg" alt="linkedin icon" height="48px" width="48px" class="rollovers social-media-icons" /></a>
                                    <a href="#" title="Flipped Normal Media on YouTube"><img src="img/youtube-icon_off.jpg" alt="youtube icon" height="48px" width="48px" class="rollovers social-media-icons" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            