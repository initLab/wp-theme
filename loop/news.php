<article class="entry news">
	<header>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="meta">Публикувано на: <?php the_date(); ?> от <a href="/users/<?php echo get_the_author_meta('user_login'); ?>"><?php the_author_link(); ?></a></p>
	</header>
	<div class="content">
		<?php the_excerpt(); ?>
		<?php /* the_author_posts_link(); */ ?>
	</div>
</article>
