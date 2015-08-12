<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

   <?php 
    $bg = get_field('background_images', 'option');
    if ($bg) { $rand_key = array_rand($bg, 1); $rand_bg = $bg[$rand_key]; }
    $body_background_image = ( $rand_bg ? 'style="background-image:url('.$rand_bg['url'].');"':'');
   ?>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage" <?php echo $body_background_image; ?>>
  <div class="super-container">
  
  <div class="vcubar">
    <div class="inner-vcubar">
      <a href="http://vcu.edu" target="_blank" class="vcu"><?php include (TEMPLATEPATH . '/library/images/svg/logo-vcu.svg'); ?></a>
      <a href="http://vcu.edu" target="_blank" class="vcu-fallback"></a>
    </div>
  </div>

	<div class="container">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">
			<div class="inner-header">
				<span class="vcuarts">
		      <a href="http://arts.vcu.edu">
		        <img class="monotone" alt="VCUarts" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcuarts.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcuarts-dk.jpg'">
		        <img class="color" alt="VCUarts" src="<?php echo get_template_directory_uri(); ?>/library/images/svg/vcuarts-hover.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/vcuarts-dk-hover.jpg'">
		      </a>
		    </span>

    		<h1 id="logo"><a href="<?php echo site_url(); ?>">Jobs</a></h1>
			</div>
		</header>
