<?php

/*
@package storyscience
	==================
		ADMIN ENQUEUE FUNCTIONS
	==================
*/

	function storyscience_load_admin_scripts( $hook ) {

		echo $hook;

		if($hook != 'toplevel_page_storyscience_settings') {
			// don't include the css file unless on the right page!
			return;
		}
		
		wp_register_style('storyscience_admin', get_template_directory_uri() . '/css/storyscience.admin.css', array(), '1.0.0', 'all');

		wp_enqueue_style('storyscience_admin');
	}

add_action('admin_enqueue_scripts', 'storyscience_load_admin_scripts');