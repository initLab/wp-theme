<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
		<article class="entry faq" id="faq-number-<?php the_ID(); ?>">
			<header>
				<h3><a href="#<?php echo 'faq-number-'.get_the_ID(); ?>"><?php the_title(); ?></a></h3>
			</header>
				<div class="cnt rte">
					<?php the_content(); ?>
				</div>
			<footer>
			</footer>
		</article>
	<?php } } ?>

<?php get_footer(); ?>
