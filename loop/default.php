<article class="entry">
	<header>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
		<p class="meta"><?php the_date(); ?></p>
	</header>
	<div class="content">
		<?php the_excerpt(); ?>
		<?php /* the_author_posts_link(); */ ?>
	</div>
</article>
