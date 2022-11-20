<?php

function my_acf_init() {
	acf_register_block([
		'name'              => 'intro',
		'title'             => 'Intro',
		'render_callback'   => 'block_render_callback'
	]);
	acf_register_block([
		'name'              => 'posts',
		'title'             => 'Posts',
		'render_callback'   => 'block_render_callback'
	]);
	acf_register_block([
		'name'              => 'slider',
		'title'             => 'Slider',
		'render_callback'   => 'block_render_callback'
	]);
	acf_register_block([
		'name'              => 'clients',
		'title'             => 'Clients',
		'render_callback'   => 'block_render_callback'
	]);
	acf_register_block([
		'name'              => 'about-us',
		'title'             => 'About Us',
		'render_callback'   => 'block_render_callback'
	]);
}
add_action('acf/init', 'my_acf_init');

function add_block_editor_assets(){
	wp_enqueue_style('block_editor_css_main', CSS_DIR . '/main.css');
	wp_enqueue_style('block_editor_css_additional', CSS_DIR . '/acf_blocks_admin.css');
}
add_action('enqueue_block_editor_assets', 'add_block_editor_assets', 10, 0);

function block_render_callback( $block ) {
	$slug = str_replace('acf/', '', $block['name']); // convert name into path friendly slug
	// include a template part from within the "templates/block" folder
	if( file_exists( get_theme_file_path("/templates/blocks/" . $slug . ".php") ) ) {
		include( get_theme_file_path("/templates/blocks/" . $slug . ".php") );
	}
}