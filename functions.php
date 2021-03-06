<?php

function shapeSpace_include_custom_jquery() {

	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', get_template_directory_uri() .'/js/jquery-3.2.1.min.js', array(), null, true);

}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');


/**
 * Enqueue scripts and styles.
 */
function velait_scripts() {

    wp_enqueue_style( 'base-style', get_template_directory_uri() .'/css/base.css');

    wp_enqueue_style( 'vendor-style', get_template_directory_uri() .'/css/vendor.css');

    wp_enqueue_style( 'velait-style', get_stylesheet_uri() );

	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array(), '20151215', false );

    wp_enqueue_script( 'pace-min-js', get_template_directory_uri() . '/js/pace.min.js', array(), '20151215', false );
    
	wp_enqueue_script( 'plugins-js', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true );

	wp_enqueue_script( 'instafeed-mins-js', get_template_directory_uri() . '/js/instafeed.min.js', array(), '20151215', true );

	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'velait_scripts' );    


function velait_features() {
	register_nav_menu('headerMEnuLocation', 'Header Menu Location');
	add_theme_support('title-tag');
	
}  

add_action('after_setup_theme', 'velait_features');

function vela_post_types() {
	register_post_type('event', array(
		'public' => true
	));
}

add_action('init', 'vela_post_types');


?>

