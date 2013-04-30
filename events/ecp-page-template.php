<?php

// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }

?>	
<?php get_header(); ?>

	<article class="page">
		<header>
			<h1><?php tribe_events_title(); ?></h1>
		</header>
		<div class="content">
			<?php include(tribe_get_current_template()); ?>
		</div>
	</article>

<?php get_footer(); ?>
