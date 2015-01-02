<?php
/**
 * SkylarWuebker2 functions and definitions
 *
 * @package SkylarWuebker2
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'skylarwuebker2_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function skylarwuebker2_setup() {

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
}
endif; // skylarwuebker2_setup
add_action( 'after_setup_theme', 'skylarwuebker2_setup' );
/**
 * Enqueue scripts and styles.
 */
function skylarwuebker2_scripts() {
	wp_enqueue_style( 'skylarwuebker2-style', get_stylesheet_uri() );

	wp_enqueue_script( 'skylarwuebker2-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );

	wp_enqueue_script( 'skylarwuebker2-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skylarwuebker2_scripts' );