<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>

		<article class="page">
			<header>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</header>
			<div class="content">
				<?php the_content(); ?>
			</div>
		</article>

	<?php } } ?>

<?php get_footer(); ?>
