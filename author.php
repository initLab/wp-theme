<?php get_header(); ?>

	<?php
		$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
		$userinfo = array(
			array('label'=>'Description', 'value'=>$curauth->user_description),
			array('label'=>'Website', 'value'=>'<a href="'.$curauth->user_url.'">'.$curauth->user_url.'</a>'),
			array('label'=>'E-mail', 'value'=>'<a href="mailto:'.$curauth->user_email.'">'.$curauth->user_email.'</a>'),
			array('label'=>'Twitter', 'value'=>'<a href="http://twitter.com/'.$curauth->twitter.'">'.$curauth->twitter.'</a>'),
			array('label'=>'Facebook', 'value'=>$curauth->facebook),
			array('label'=>'Jabber', 'value'=>$curauth->jabber),
			array('label'=>'AIM', 'value'=>$curauth->aim),
		);

	?>

	<article class="panel" id="user">

		<div class="avatar" style="float: right;">
			<?php echo get_avatar( $curauth->ID, 120 ); ?>
		</div>
		<header>
			<h2><?php echo $curauth->first_name.' '.$curauth->last_name; ?></h2>
		</header>

		<dl>
			<?php foreach($userinfo as $info) { if($info['value']) { ?>
				<dt><?php echo $info['label']; ?></dt>
				<dd><?php echo $info['value']; ?></dd>
			<?php } } ?>
		</dl>

		<section class="col-1-2">
			<h3>Blog</h3>
			<ul>
				<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php } } ?>
			</ul>
		</section>
		<section class="col-1-2">
			<h3>Новини</h3>
			<ul>
				<?php if (have_posts()) { while (have_posts()) { the_post(); ?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php } } ?>
			</ul>
		</section>

	</article>

<?php get_footer(); ?>
