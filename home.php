<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

	<div class="row">
		<?php dynamic_sidebar("Homepage - Row 1"); ?>
	</div>
	<div class="row" id="site-sections">
		<?php dynamic_sidebar("Homepage - Row 2"); ?>
	</div>
	<div class="row" >
		<section class="messages" id="presence-wrapper">
			<header>
				<h3>Кой e в Лаб'а?</h3>
			</header>
			<div id="presence"></div>
		</section>
	</div>
	<div class="row" id="events">
		<?php dynamic_sidebar("Homepage - Row 3"); ?>
	</div>
	<?php /* ?>
	<div class="row">
		<section class="messages" id="tweets-wrapper">
			<header>
				<h3>init Lab в Twitter</h3>
			</header>
			<div id="tweets"></div>
		</section>
	</div>
	<?php */ ?>

<?php get_footer(); ?>
