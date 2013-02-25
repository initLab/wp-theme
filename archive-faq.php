<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
		<article class="entry faq">
			<header>
				<h3><?php the_title(); ?></h3>
			</header>
				<div class="cnt rte">
					<?php the_content(); ?>
				</div>
			<footer>
			</footer>
		</article>
	<?php } } ?>

<?php get_footer(); ?>
