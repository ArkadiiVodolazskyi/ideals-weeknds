<?php
function register_custom_widgets() {
	register_sidebar([
		'name'          => 'Sidebar Right',
		'id'            => 'sidebar-right',
		'description'   => '',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
		'before_sidebar' => '',
		'after_sidebar'  => '',
	]);

}
add_action('widgets_init', 'register_custom_widgets');