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