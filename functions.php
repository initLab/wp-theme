<?php
	
	ini_set('display_errors', 1);
    // Helper functions
    function de($var, $debug=true)
    {
        if($debug)
        {
            echo '<div class="debug">';
                var_dump($var);
            echo '</div>';
        }
    }

    // Includes
	if (function_exists('p2p_register_connection_type')){
		include 'lib/relations.php';
	}

	include 'lib/adminTweaks.php';
	include 'lib/rteTweaks.php';
	include 'lib/rteShortCodes.php';
    include 'lib/customwidgets.php';
    include 'lib/createCustomPostType.php';
    include 'breadcrumbs.php';

    add_filter( 'use_default_gallery_style', '__return_false' ); //Remove Gallery Inline Styling

    //register_sidebar(
        //array(
            //'name' => 'Index',
            //'description' => 'This widget area is on top of the content on the homepage',
            //'before_widget' => '<section id="%1$s" class="%2$s">',
            //'before_title'  => '<header><h2>',
            //'after_title'   => '</h2></header><div class="cnt">',
            //'after_widget'  => '</div></section>'
        //)
    //);

    register_sidebar(
        array(
            'name' => 'Homepage - Row 1',
            'description' => '',
            'before_widget' => '<section id="%1$s" class="%2$s">',
            'before_title'  => '<header><h2>',
            'after_title'   => '</h2></header><div class="content">',
            'after_widget'  => '</div></section>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Homepage - Row 2',
            'description' => '',
            'before_widget' => '',
            'before_title'  => '',
            'after_title'   => '',
            'after_widget'  => ''
        )
    );

    register_sidebar(
        array(
            'name' => 'Footer',
            'description' => 'This is Footer widget area',
            'before_widget' => '<section id="%1$s" class="%2$s">',
            'before_title'  => '<header><h3>',
            'after_title'   => '</h3></header><div class="cnt">',
            'after_widget'  => '</div></section>'
        )
    );

    register_nav_menu( 'header', 'Header' );
    register_nav_menu( 'sidebar', 'Sidebar');
    register_nav_menu( 'sitemap', 'Sitemap');
    register_nav_menu( 'footer', 'Footer');

	//change author/username base to users/userID
	function change_author_permalinks() {
	  global $wp_rewrite;
	   // Change the value of the author permalink base to whatever you want here
	   $wp_rewrite->author_base = 'users';
	  $wp_rewrite->flush_rules();
	}
	add_action('init','change_author_permalinks');

	function users_query_vars($vars) {
		// add lid to the valid list of variables
		$new_vars = array('users');
		$vars = $new_vars + $vars;
		return $vars;
	}
	add_filter('query_vars', 'users_query_vars');

	function user_rewrite_rules( $wp_rewrite ) {
	  $newrules = array();
	  $new_rules['users/(\d*)$'] = 'index.php?author=$matches[1]';
	  $wp_rewrite->rules = $new_rules + $wp_rewrite->rules;
	}
	add_filter('generate_rewrite_rules','user_rewrite_rules');

	// Change the_excerpt character length
	function custom_excerpt_length( $length ) {
		return 40;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

	// Change the more string for the_excerpt function
	function new_excerpt_more( $more ) {
		return ' ...';
	}
	add_filter('excerpt_more', 'new_excerpt_more');

	//Ensure the $wp_rewrite global is loaded
	//global $wp_rewrite;
	//Call flush_rules() as a method of the $wp_rewrite object
	//$wp_rewrite->flush_rules();
	//flush_rewrite_rules();

	function dev4press_debug_rewrite_rules() {
		global $wp_rewrite;
		echo '<div>';
		if (!empty($wp_rewrite->rules)) {
			echo '<h5>Rewrite Rules</h5>';
			echo '<table><thead><tr>';
			echo '<td>Rule</td><td>Rewrite</td>';
			echo '</tr></thead><tbody>';
			foreach ($wp_rewrite->rules as $name => $value) {
				echo '<tr><td>'.$name.'</td><td>'.$value.'</td></tr>';
			}
			echo '</tbody></table>';
		} else {
			echo 'No rules defined.';
		}
		echo '</div>';
	}

	function dev4press_debug_page_request() {
		global $wp, $template;
		define("D4P_EOL", "\r\n");

		echo 'Request: ';
		echo empty($wp->request) ? "None" : esc_html($wp->request);
		echo ''.D4P_EOL;
		echo '<br />Matched Rewrite Rule: ';
		echo empty($wp->matched_rule) ? None : esc_html($wp->matched_rule);
		echo ''.D4P_EOL;
		echo '<br />Matched Rewrite Query: ';
		echo empty($wp->matched_query) ? "None" : esc_html($wp->matched_query);
		echo ''.D4P_EOL;
		echo '<br />Loaded Template: ';
		echo basename($template);
		echo ''.D4P_EOL;
	}

?>
