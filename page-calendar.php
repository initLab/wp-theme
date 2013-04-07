<?php
/**
 * Template Name: Calendar
 */
?>
<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

		<article class="page">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="content" id="calendar">
				<?php the_content(); ?>
			</div>
		</article>

	<?php } } ?>

<?php get_footer(); ?>
