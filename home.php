<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

	<div class="row">
		<div class="col-2-3">
			<?php dynamic_sidebar("Homepage"); ?>
		</div>
		<div class="col-1-3">
			<section class="panel" id="panel-map">
				<header><h2>Къде?</h2></header>
				<div id="smallmap"></div>
			</section>
		</div>
		<div class="cleaner"></div>
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
	<div class="row" id="presence-wrapper">
		<section class="panel messages">
			<header>
				<h3>Кой e в Лаб'а?</h3>
			</header>
			<div id="presence"></div>
		</section>
	</div>
	<div class="row">
		<section class="panel messages">
			<div id="tweets"></div>
		</section>
	</div>

<?php get_footer(); ?>
