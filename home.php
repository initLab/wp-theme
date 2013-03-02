<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

	<div class="row">
		<?php dynamic_sidebar("Homepage"); ?>
		<section id="panel-map">
			<header><h2>Къде?</h2></header>
			<div id="smallmap"></div>
		</section>
	</div>
	<div class="row" id="site-sections">
		<?php dynamic_sidebar("Hacking & Coworking"); ?>
	</div>
<?php /* ?>
	<div class="row">
		<section class="panel" id="calendar">
			<header>
				<h3>Предстоящи събития</h3>
			</header>
			<div class="content">
			</div>
		</section>
	</div>
<?php */ ?>
	<div class="row" >
		<section class="messages" id="presence-wrapper">
			<header>
				<h3>Кой e в Лаб'а?</h3>
			</header>
			<div id="presence"></div>
		</section>
	</div>
	<div class="row">
		<section class="messages" id="tweets-wrapper">
			<div id="tweets"></div>
		</section>
	</div>

<?php get_footer(); ?>
