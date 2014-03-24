<!DOCTYPE html>
<html class="wf-active">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
	<?php if ( is_singular() ): ?><link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"><?php endif; ?>
	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
    <!-- Touch icon for iOS 2.0+ and Android 2.1+ -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/favicon-152.png">

    <!-- IE 10 Metro tile icon (Metro equivalent of apple-touch-icon) -->
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/images/favicon-144.png">

    <!-- For iPad with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php bloginfo('template_url'); ?>/images/favicon-152.png">

    <!-- For iPad with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo('template_url'); ?>/images/favicon-144.png">

    <!-- For iPhone with high-resolution Retina display running iOS ≥ 7: -->
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php bloginfo('template_url'); ?>/images/favicon-120.png">

    <!-- For iPhone with high-resolution Retina display running iOS ≤ 6: -->
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo('template_url'); ?>/images/favicon-114.png">

    <!-- For first- and second-generation iPad: -->
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo('template_url'); ?>/images/favicon-72.png">

    <!-- For non-Retina iPhone, iPod Touch, and Android 2.1+ devices: -->
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo('template_url'); ?>/images/favicon-57.png">

    <!-- Other icons -->
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon-32.png" sizes="32x32">
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/images/favicon.ico">
</head>
<body <?php body_class(); ?>>
	<div id="container">
		<header id="top">
			<hgroup>
				<h1><a href="/">init Lab</a></h1>
				<?php breadcrumbs(); ?>
			</hgroup>
			<?php

				wp_nav_menu( array('theme_location' => 'header') );
				//sdsdsd
				if(is_user_logged_in()){

				}else {

				}

			?>
			<form id="header-search" action="/" method="get" role="search">
				<label class="ss-icon" for="header-s">Search</label>
				<input id="header-s" type="text" name="s" value="" placeholder="Търсене" >
				<input id="header-searchsubmit" type="submit" value="Търсене">
			</form>
		</header>
		<div id="main">
