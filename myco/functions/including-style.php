<?php

function myco_scripts() {
	wp_enqueue_style( 'myco-style', get_stylesheet_uri() );
    wp_enqueue_style( 'myco-mainstyle', get_template_directory_uri() . '/assets/css/libs.min.css');


wp_deregister_script( 'jquery');
wp_register_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array(),'',true);
wp_enqueue_script( 'jquery');

wp_enqueue_script( 'myco-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array('jquery'), '', true );

	// if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	// 	wp_enqueue_script( 'comment-reply' );
	// }
}
add_action( 'wp_enqueue_scripts', 'myco_scripts' );