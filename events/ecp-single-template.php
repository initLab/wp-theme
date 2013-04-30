<?php
// Don't load directly
if ( !defined('ABSPATH') ) { die('-1'); }
?>
<?php get_header(); ?>

	<article class="page columns">
		<header>
			<h1><?php the_title(); ?></h1>
		</header>
		<?php the_post(); global $post; ?>
		<?php include(tribe_get_current_template()); ?>
		<?php if(tribe_get_option('showComments','no') == 'yes'){ comments_template(); } ?>
	</article>

<?php get_footer(); ?>
<?php /* edit_post_link(__('Edit','tribe-events-calendar'), '<span class="edit-link">', '</span>'); 
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>> */ ?>
