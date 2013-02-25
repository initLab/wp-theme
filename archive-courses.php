<?php get_header(); ?>
	<?php

		$upcoming		= get_posts( array( 'post_type' => 'courses', 'meta_query' => array( array( 'key' => 'status', 'value' => '1',))) );
		$inprogress		= get_posts( array( 'post_type' => 'courses', 'meta_query' => array( array( 'key' => 'status', 'value' => '2',))) );
		$finished		= get_posts( array( 'post_type' => 'courses', 'meta_query' => array( array( 'key' => 'status', 'value' => '3',))) );

	?>
	<?php if($upcoming){ ?>
		<section class="panel courses" id="list-upcoming">
			<header><h3>Предстоящи Курсове</h3></header>
			<ul>
				<?php
					if ($upcoming) {
						foreach ( $upcoming as $post ) {
							setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
						}
					}
				?>
			</ul>
		</section>
	<?php } ?>

	<?php if($inprogress){ ?>
		<section class="panel courses" id="list-inprogress">
			<header><h3>Активни Курсове</h3></header>
			<ul>
				<?php
					if ($inprogress) {
						foreach ( $inprogress as $post ) {
							setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
						}
					}
				?>
			</ul>
		</section>
	<?php } ?>

	<?php if($finished){ ?>
		<section class="panel courses" id="list-archive">
			<header><h3>Архив</h3></header>
			<ul>
				<?php
					if ($finished) {
						foreach ( $finished as $post ) {
							setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
							<?php
						}
					}
				?>
			</ul>
		</section>
	<?php } ?>

<?php get_footer(); ?>
