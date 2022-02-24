<?php
/**
 * Understrap Child Theme functions and definitions
 *
 * @package UnderstrapChild
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// ==================================================
// ============== UNDERSTRAP FUNCTIONS ==============
// ==================================================


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







// ==============================================================
// ============== TRI-LOCAL CUSTOM PLUGIN FUNCTIONS =============
// ==============================================================


// Installs plugin "Carbon Fields"
// ********************************
use Carbon_Fields\Field;
use Carbon_Fields\Container;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options' ) )
        ->add_fields( array(
            Field::make( 'rich_text', 'crb_footer_copyright', 'Copyright' ),
        ) );
}
// Source: https://docs.carbonfields.net/plugin-quickstart.html#without-composer

// add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
// function crb_attach_post_meta() {
//     Container::make( 'post_meta', __( 'Post Options' ) )
//         ->where( 'post_type', '=', 'post' )
//         ->add_fields( array(
//             Field::make( 'text', 'crb_venue', 'Venue' ),
//         ) );
// }



// ==============================================================
// ============== TRI-LOCAL CUSTOM THEME FUNCTIONS ==============
// =========== All Code Below Written By Emily Mackay ===========
// ==============================================================


// All Tri-Local Custom Posts for use in Custom Theme
// **************************************************


// CUSTOM POST TYPE: PARTNERS
function em_custom_post_partners() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-index-card',
		'labels' => array(
				'name' => 'Partners',
				'singular_name' => 'Partner',
				'menu_name' => 'TriLocal Partner',
		),
	);
	register_post_type('partners', $args);

}
add_action('init', 'em_custom_post_partners');

// CUSTOM POST TYPE: EDUCATION (FACTS)
function em_custom_post_education() {
	$args = array(
		'public' => true,
		'has_archive' => true,
		'supports' => array('title', 'editor', 'thumbnail'),
		'menu_icon' => 'dashicons-lightbulb',
		'labels' => array(
				'name' => 'Facts',
				'singular_name' => 'Fact',
				'menu_name' => 'TriLocal Education',
		),
	);
	register_post_type('facts', $args);

}
add_action('init', 'em_custom_post_education');





// CUSTOM POST TYPE: BUSINESSES (For Directory)
// function em_add_metaboxes_business() {
// 	add_meta_box(
// 		'wpt_events_location',
// 		'Event Location',
// 		'wpt_events_location',
// 		'events',
// 		'side',
// 		'default'
// 	);
// }
function em_custom_post_business() {
	$labels = array(
		'name' => 'Businesses',
		'singular_name' => 'Business',
		'menu_name' => 'TriLocal Business',
		'all_items' => 'All Businesses',
		'view_item' => 'View Business',
		'add_new_item' => 'Add New Business',
		'search_items' => 'Search Businesses',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => false, // if true, switches to gutenberg block editor
		'capability_type' => 'post',
		'description' => 'Local Tri-City Businesses for use in the Business Directory',
		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'revisions', 'page-attributes'),
		'menu_icon' => 'dashicons-store',
		// 'register_meta_box_cb' => 'em_add_metaboxes_business',
	);
	register_post_type('em_businesses', $args); // this registers a custom post called 'businesses'

}
add_theme_support('post-thumbnails', array('businesses'));
add_action('init', 'em_custom_post_business');


function em_custom_taxonomy_business() {
	$args_location = array(
		'labels' => array(
			'name' => 'Locations',
			'singular_name' => 'Location',
			'edit_item' => 'Edit Location', 
			'update_item' => 'Update Location',
			'add_new_item' => 'Add New Location',
			'new_item_name' => 'New Location Name',
			'menu_name' => 'Locations',
		),
		'public' => true,
		'hierarchical' => true,
	);
	register_taxonomy('locations', array('em_businesses'), $args_location);

	$args_category = array(
		'labels' => array(
			'name' => 'Categories',
			'singular_name' => 'Category'
		),
		'public' => true,
		'hierarchical' => true,
	);
	register_taxonomy('categories', array('em_businesses'), $args_category);
}
add_action('init', 'em_custom_taxonomy_business');