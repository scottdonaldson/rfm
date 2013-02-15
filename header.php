<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url'); ?>" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/rfm.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/media.css">

    <script src="<?php echo bloginfo('template_url'); ?>/js/libs/modernizr-2.5.3.min.js"></script>
    
    <?php wp_head(); ?>
</head>
<body <?php body_class('preload'); ?>>

<div id="container">

<!--[if lt IE 7]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
	<header class="clearfix">
    	<div class="header-top">
        	<div class="header-mid"></div>
        </div>

		<a href="<?php echo home_url(); ?>" rel="home" title="Rare Form Mastering">
	        <img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" height="auto" width="160" />
    	</a>
            
        <?php wp_nav_menu(array( 'theme_location' => 'primary')); ?>
        
        <div id="welcome">
        	<span><span>W</span></span>
            <span><span>E</span></span>
            <span><span>L</span></span>
            <span><span>C</span></span>
            <span><span>O</span></span>
            <span><span>M</span></span>
            <span><span>E</span></span>
            <span><span>T</span></span>
            <span><span>O</span></span>
            <span><span>R</span></span>
            <span><span>A</span></span>
            <span><span>R</span></span>
            <span><span>E</span></span>
            <span><span>F</span></span>
            <span><span>O</span></span>
            <span><span>R</span></span>
            <span><span>M</span></span>
            <span><span>M</span></span>
            <span><span>A</span></span>
            <span><span>S</span></span>
            <span><span>T</span></span>
            <span><span>E</span></span>
            <span><span>R</span></span>
            <span><span>I</span></span>
            <span><span>N</span></span>
            <span><span>G</span></span>
        </div>

		<div class="header-bottom"></div>
	</header>

	<div id="main" role="main" class="clearfix">