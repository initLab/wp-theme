<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

	<div class="row">
		<?php dynamic_sidebar("Homepage - Row 1"); ?>
	</div>
	<?php /*
	<div class="row" id="site-sections">
		<?php dynamic_sidebar("Homepage - Row 2"); ?>
	</div>
	*/ ?>
	<div class="row" >
		<section class="messages" id="presence-wrapper">
			<header>
				<h3>Кой e в Лаб'а?</h3>
			</header>
			<div id="presence"></div>
		</section>
	</div>
	<div class="row">
		<section class="panel" id="calendar">
			<header>
				<h3>Предстоящи събития</h3>
			</header>
			<div class="content">
				<?php echo do_shortcode("[ftcalendar calendars='events' types='off' legend='off' show_rss_feed='off' show_ical_feed='off']"); ?>
			</div>
		</section>
	</div>
	<div class="row">
		<section class="messages" id="tweets-wrapper">
			<header>
				<h3>init Lab в Twitter</h3>
			</header>
			<div id="tweets"></div>
		</section>
	</div>

<?php get_footer(); ?>
