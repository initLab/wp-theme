<?php get_header(); ?>

	<article class="page search">
		<div class="content">

			<?php echo get_search_form(); ?>
			<br />
			<br />

			<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
				<?php include 'loop/search.php'; ?>
			<?php } } ?>

		</div>
	</article>

<?php get_footer(); ?>

