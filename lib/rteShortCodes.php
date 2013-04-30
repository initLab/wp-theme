<?php

	// Year Shortcode
	function year_shortcode()
	{
		$year = date('Y');
		return $year;
	}
	add_shortcode('year', 'year_shortcode');

	// Detect Gists and Embed Them [gist id="ID" file="FILE"]
	function gist_shortcode($atts)
	{
		return sprintf(
			'<script src="https://gist.github.com/%s.js%s"></script>',
			$atts['id'],
			$atts['file'] ? '?file=' . $atts['file'] : ''
		);
	}
	add_shortcode('gist','gist_shortcode');

	// Remove this function if you don't want autoreplace gist links to shortcodes
	function gist_shortcode_filter($content)
	{
		return preg_replace('/https:\/\/gist.github.com\/([\d]+)[\.js\?]*[\#]*file[=|_]+([\w\.]+)(?![^<]*<\/a>)/i', '[gist id="${1}" file="${2}"]', $content );
	}
	add_filter( 'the_content', 'gist_shortcode_filter', 9);

	// Show all users part of this Group
	add_shortcode('group-list', 'my_group_list_shortcode');
	function my_group_list_shortcode( $atts ) {
		// Get the global $wpdb object
		global $wpdb;

		// Extract the parameters and set the default
		extract ( shortcode_atts( array(
			'group' => 'No Group' // No Group is a defined user-group
		), $atts ) );

		// The taxonomy name will be used to get the objects assigned to that group
		$taxonomy = 'user-group';

		// Use a dBase query to get the ID of the user group
		$userGroupID = $wpdb->get_var(
			$wpdb->prepare("SELECT term_id
			FROM {$wpdb->terms} t
			WHERE t.name = %s", $group));

		// Now grab the object IDs (aka user IDs) associated with the user-group
		$userIDs = get_objects_in_term($userGroupID, $taxonomy);

		// Check if any user IDs were returned; if so, display!
		// If not, notify visitor none were found.
		if ($userIDs) {
			$content = '<ul class="group-list">';
			foreach( $userIDs as $userID ) {
				$user = get_user_by('id', $userID);
				$content .= '<li>';
				$content .= '<a href="'. get_author_posts_url( $user->ID ) . '">';
				$content .= '<span class="avatar">';
				$content .= get_avatar( $user->ID, 120 );
				$content .= '</span>';
				$content .= '<span class="name">' . $user->display_name . '</span>';
				$content .= '</a>';
				$content .= '</li>';
			}
			$content .= "</ul>";
		} else {
			$content =
				"<div class='group-list group-list-none'>Returned no results</div>";

		}
		return $content;
	}
?>
