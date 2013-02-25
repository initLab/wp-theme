<?php
/**
 * Template Name: Homepage
 */
?>

<?php get_header(); ?>

	<div class="row">
		<?php dynamic_sidebar("Homepage"); ?>
	</div>
	<div class="row">
		<hgroup class="col w2">
			<h2><a href="/hackerspace">Hackerspace</a></h2>
		</hgroup>
		<hgroup class="col w2">
			<h2><a href="/co-working-space">Co-Working space</a></h2>
		</hgroup>
	</div>
	<div class="row">
		<section class="panel" id="calendar">
			<header>
				<h3>Предстоящи събития</h3>
			</header>
			<div class="content">
			</div>
		</section>
	</div>
	<div class="row">
		<section class="messages">
			<header>
				<h3>Кой e в Лаб'а?</h3>
			</header>
			<div  id="presence"></div>
		</section>
	</div>
	<div class="row">
		<section class="messages">
			<div id="tweets"></div>
		</section>
	</div>

<?php get_footer(); ?>
