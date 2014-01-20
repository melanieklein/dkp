<?php

ini_set('display_errors', 1);
	remove_filter('the_content', 'wpautop');

	function my_wp_nav_menu_args( $args = '' )
	{
	    $args['container'] = 'nav';
	    return $args;
	} // function
		add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
        register_nav_menu('header-menu',__('Header Menu','titi'));

	
         add_action('init', 'my_custom_init');
		function my_custom_init()
		{
		register_post_type('video', array(
		  'label' => __('Videos'),
		  'singular_label' => __('Video'),
		  'public' => true,
		  'show_ui' => true,
		  'capability_type' => 'post',
		  'hierarchical' => false,
		  'supports' => array('title', 'editor', 'excerpt')
		));
		}

		add_filter( "the_excerpt", "add_class_to_excerpt" );
function add_class_to_excerpt( $excerpt ) {
    return str_replace('<p', '<p class="video-description"', $excerpt);
}