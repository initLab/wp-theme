<?php get_header(); ?>

	<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
		
		<?php
			$meta = get_post_meta(get_the_ID());

	//		echo $meta["start_date"][0];
	//		echo $meta["end_date"][0];
	//		echo $meta["registration_end"][0];
	//		echo $meta["registration"][0];
	//		echo $meta["status"][0];
		?>

		<article class="page columns">
			<header>
				<h1><?php the_title(); ?></h1>
			</header>
			<div class="content">
				<section>
					<header><h3>Описание</h3></header>
					<?php the_content(); ?>
				</section>
			</div>
			<div class="sidebar">
				<section>
				    <header><h3>Информация</h3></header>
					<?php echo '<p>Свободни места: '.$meta["number_of_attendees"][0].'</p>'; ?>
					<?php echo '<p>Цена: '.$meta["price"][0].'лв</p>'; ?>
					<?php echo '<p>'.nl2br( $meta["payment_information"][0] ).'</p>'; ?>
				</section>
				<section>
					<header><h3>Програма</h3></header>
					<?php echo nl2br( $meta["program"][0] ); ?>
				</section>
			</div>
		</article>

	<?php } } ?>

<?php get_footer(); ?>
