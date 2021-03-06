<?php

/*
@package storyscience
	==================
		ADMIN PAGE
	==================
*/

function storyscience_add_admin_page() {
	// generate sunset admin page
	add_menu_page( 
		'Storyscience Theme Options', /*page_title*/
		'Story science', /*menu title*/
		'manage_options', /*capability (user permissions required to access menu)*/
		'storyscience_settings', /*menu_slug*/
		'storyscience_create_page',  /*function*/
		get_template_directory_uri() . '/img/storysciene-icon.png', /*icon_url*/
		110 /*position of menu item*/
		);

	// generate storyscience admin sub pages
	add_submenu_page( 
		'storyscience_settings', /*parent slug*/
		 'Storyscience Theme Options', /*page_title*/
		  'Settings',/*menu_title*/
		   'manage_options', /*capability*/
		   'storyscience_settings', /*menu_slug*/
		    'storyscience_create_page' /*function*/
		    );
	
	add_submenu_page( 
		'storyscience_settings', /*parent slug*/
		 'Storyscience CSS Options', /*page_title*/
		  'Custom CSS',/*menu_title*/
		   'manage_options', /*capability*/
		   'storyscience_settings_css', /*menu_slug*/
		    'storyscience_settings_page' /*function*/
		    );
	
	// Activate custom settings
	add_action( 'admin_init', 'storyscience_custom_settings', 'sunset_sidebar_options');
}

function storyscience_custom_settings () {
	register_setting( 'storyscience-settings-group', 'first_name');
	register_setting( 'storyscience-settings-group', 'last_name');

	add_settings_section( 'storyscience-sidebar-options', 'Sidebar Options', 'storyscience_sidebar_options', 'storyscience_settings');
	
	add_settings_field( 'sidebar-name', 'Full Name', 'storyscience_sidebar_name', 'storyscience_settings', 'storyscience-sidebar-options');
}

function storyscience_sidebar_options() {
	echo 'Customize your Sidebar Information';
}

function storyscience_sidebar_name() {
	$firstName = esc_attr( get_option( 'first_name' ) );
	$lastName = esc_attr( get_option( 'last_name' ) );
	$output = '<input type="text" name="first_name" value="' . $firstName . '" placeholder="First Name" ∕>';
	$output .= '<input type="text" name="last_name" value="' . $lastName . '" placeholder="Last Name" ∕>';
	echo $output;
}

add_action('admin_menu','storyscience_add_admin_page');

function storyscience_create_page() {
	// generation of our admin page
	require_once( get_template_directory() . '/inc/templates/storyscience-admin.php');
}

function storyscience_settings_page() {
	// generation of our CSS admin page
	require_once( get_template_directory() . '/inc/templates/storyscience-admin.php');
}