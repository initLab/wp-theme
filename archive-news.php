<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
		<?php include 'loop/news.php'; ?>
	<?php } } ?>

<?php get_footer(); ?>

