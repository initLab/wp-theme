<?php get_header(); ?>

	<div class="list-wrapper">
		<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
			<?php include 'loop/news.php'; ?>
		<?php } } ?>
	</div>
	<aside>
		<section>
			<header>
				<h3>Последно в Twitter</h3>
			</header>
			<div id="tweets" class="messages">
			</div>
		</section>
	</aside>

<?php get_footer(); ?>

