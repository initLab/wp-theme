<?php

	if(is_admin())
	{

		// Hide the option of choosing a different theme
		add_action('admin_init', 'my_remove_menu_elements', 102);
		function my_remove_menu_elements()
		{
			remove_submenu_page( 'themes.php', 'themes.php' );
		}

		
	}

?>
