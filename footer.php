		</div>
		<footer id="bottom">
			<div class="row">
				<?php dynamic_sidebar("Footer"); ?>
			</div>
		</footer>
		<div id="copyright">
			<p>Proudly running on <a href="http://wordpress.org/">Wordpress</a>. WP Theme source code is at <a href="http://github.com/organizations/initlab">GitHib</a></p>
			<p>Licensed under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution-ShareAlike 3.0 Unported License</a></p>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

	<?php /* Included JS Files
	<script src="<?php bloginfo('template_url'); ?>/scripts/foundation/jquery.reveal.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/foundation/jquery.orbit-1.4.0.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/foundation/jquery.customforms.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/foundation/jquery.placeholder.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/foundation/jquery.tooltips.js"></script>
	*/ ?>

	<script src="<?php bloginfo('template_url'); ?>/scripts/jquery.tweet.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/jflickrfeed.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/scripts/app.js"></script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-18158223-1']);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<?php wp_footer(); ?>
</body>
</html>
