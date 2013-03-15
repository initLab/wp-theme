<!DOCTYPE html>
<html class="wf-active">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
    <title><?php wp_title('&laquo;', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/app.css">
	<!--[if lt IE 9]> <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie.css"> <![endif]-->
	<!--[if lt IE 7]> <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/ie6.css"> <![endif]-->
	<?php if ( is_singular() ): ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php endif; ?>
	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <?php wp_head(); ?>
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
			<form id="header-search" action="http://initlab/" method="get" role="search">
				<label class="ss-icon" for="header-s">Search</label>
				<input id="header-s" type="text" name="s" value="" placeholder="Търсене" >
				<input id="header-searchsubmit" type="submit" value="Търсене">
			</form>
		</header>
		<div id="main">
