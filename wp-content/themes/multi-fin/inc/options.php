<?php
/**
 * Options page
 */
if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page(
		[
			'page_title' => 'Options',
			'menu_title' => 'Options',
			'menu_slug'  => 'general-options',
			'capability' => 'edit_posts',
			'redirect'   => false
		]
	);
	acf_add_options_sub_page( [
		'page_title'  => 'Contacts',
		'menu_title'  => 'Contacts',
		'parent_slug' => 'general-options',
	] );

	acf_add_options_sub_page( [
		'page_title'  => 'Social',
		'menu_title'  => 'Social',
		'parent_slug' => 'general-options',
	] );

    acf_add_options_sub_page( [
        'page_title'  => '404',
        'menu_title'  => '404',
        'parent_slug' => 'general-options',
    ] );
}