<?php get_header(); ?>

	<?php echo get_search_form(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
		<?php include 'loop/search.php'; ?>
	<?php } } ?>

<?php get_footer(); ?>

