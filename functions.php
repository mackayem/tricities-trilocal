<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



/**
 * Removes the parent themes stylesheet and scripts from inc/enqueue.php
 */
function understrap_remove_scripts() {
	wp_dequeue_style( 'understrap-styles' );
	wp_deregister_style( 'understrap-styles' );

	wp_dequeue_script( 'understrap-scripts' );
	wp_deregister_script( 'understrap-scripts' );
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );



/**
 * Enqueue our stylesheet and javascript file
 */
function theme_enqueue_styles() {

	// Get the theme data.
	$the_theme = wp_get_theme();

	$suffix = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	// Grab asset urls.
	$theme_styles  = "/css/child-theme{$suffix}.css";
	$theme_scripts = "/js/child-theme{$suffix}.js";

	wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . $theme_styles, array(), $the_theme->get( 'Version' ) );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . $theme_scripts, array(), $the_theme->get( 'Version' ), true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );



/**
 * Load the child theme's text domain
 */
function add_child_theme_textdomain() {
	load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );



/**
 * Overrides the theme_mod to default to Bootstrap 5
 *
 * This function uses the `theme_mod_{$name}` hook and
 * can be duplicated to override other theme settings.
 *
 * @param string $current_mod The current value of the theme_mod.
 * @return string
 */
function understrap_default_bootstrap_version( $current_mod ) {
	return 'bootstrap5';
}
add_filter( 'theme_mod_understrap_bootstrap_version', 'understrap_default_bootstrap_version', 20 );



/**
 * Loads javascript for showing customizer warning dialog.
 */
function understrap_child_customize_controls_js() {
	wp_enqueue_script(
		'understrap_child_customizer',
		get_stylesheet_directory_uri() . '/js/customizer-controls.js',
		array( 'customize-preview' ),
		'20130508',
		true
	);
}
add_action( 'customize_controls_enqueue_scripts', 'understrap_child_customize_controls_js' );



// All Tri-Local Custom Posts for use in Custom Theme
// **************************************************
function em_custom_post_partners() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'support' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-index-card',
		'labels' => array(
				'name' => 'TriLocal Partners',
				'singular_name' => 'TriLocal Partner',
		),
	);
	register_post_type('partners', $args);

}
add_action('init', 'em_custom_post_partners');


function em_custom_post_education() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'support' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-lightbulb',
		'labels' => array(
				'name' => 'TriLocal Facts',
				'singular_name' => 'TriLocal Fact',
		),
	);
	register_post_type('facts', $args);

}
add_action('init', 'em_custom_post_education');


function em_custom_post_business() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'support' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-store',
		'labels' => array(
				'name' => 'TriLocal Businesses',
				'singular_name' => 'TriLocal Business',
		),
	);
	register_post_type('businesses', $args);

}
add_action('init', 'em_custom_post_business');