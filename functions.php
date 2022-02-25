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



// ==============================================================
// ============== TRI-LOCAL CUSTOM THEME FUNCTIONS ==============
// =========== All Code Below Written By Emily Mackay ===========
// ==============================================================


// All Tri-Local Custom Posts for use in Custom Theme
// **************************************************


// ----------------- CUSTOM POST TYPE: PARTNERS
function em_custom_post_partners() {
	$labels = array(
		'name' => 'Partners',
		'singular_name' => 'Partner',
		'menu_name' => 'TriLocal Partners',
		'all_items' => 'All Partners',
		'view_item' => 'View Partner',
		'add_new_item' => 'Add New Partner',
		'search_items' => 'Search Partners',
		'featured_image' => 'Partner Logo',
		'set_featured_image' => 'Set a partner logo',
		'remove_featured_image' => 'Remove partner logo',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => false, // if true, switches to gutenberg block editor
		'capability_type' => 'post',
		'description' => 'Tri-Local partners',
		'supports' => array('title', 'editor', 'thumbnail', 'revisions'),
		'menu_icon' => 'dashicons-index-card',
	);
	register_post_type('em_partners', $args); // this registers a custom post called 'em_partners'
}
add_action('init', 'em_custom_post_partners');

function em_custom_partners_change_options($title) {
	$screen = get_current_screen();
  
	if ('em_partners' == $screen->post_type ) {
		$title = 'Partner Name'; // changes the placeholder text for Post Title
		remove_action('media_buttons', 'media_buttons'); // removes the Media button
	}
	return $title; 	// changes the placeholder text for Post Title
}
add_filter('enter_title_here', 'em_custom_partners_change_options');

function em_custom_carbonfields_partners() {
	Container::make('post_meta', 'Partner Details')
		->where('post_type', '=', 'em_partners')
		->add_fields(array(
			Field::make('text', 'partner_website', 'Website Link')
				->set_attribute( 'placeholder', 'https://')
		)); // end add_fields
} // end em_attach_post_meta_partners
add_action('carbon_fields_register_fields', 'em_custom_carbonfields_partners');


// ----------------- CUSTOM POST TYPE: EDUCATION (FACTS)
function em_custom_post_education() {
	$labels = array(
		'name' => 'Facts',
		'singular_name' => 'Fact',
		'menu_name' => 'TriLocal Education',
		'all_items' => 'All Facts',
		'view_item' => 'View Fact',
		'add_new_item' => 'Add New Fact',
		'search_items' => 'Search Facts',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => false, // if true, switches to gutenberg block editor
		'capability_type' => 'post',
		'description' => 'Facts about buying local',
		'supports' => array('title', 'revisions'),
		'menu_icon' => 'dashicons-lightbulb',
	);
	register_post_type('em_education', $args); // this registers a custom post called 'em_education'
}
add_action('init', 'em_custom_post_education');

function em_custom_education_change_options($title) {
	$screen = get_current_screen();
  
	if ('em_education' == $screen->post_type ) {
		$title = 'Fact Title'; // changes the placeholder text for Post Title
		remove_action('media_buttons', 'media_buttons'); // removes the Media button
	}
	return $title; 	// changes the placeholder text for Post Title
}
add_filter('enter_title_here', 'em_custom_education_change_options');

function em_custom_carbonfields_education() {
	Container::make('post_meta', 'Fact Details')
		->where('post_type', '=', 'em_education')
		->add_fields(array(
			Field::make('textarea', 'fact_blurb', 'Fact Blurb')
				->set_attribute( 'placeholder', 'Blurb that displays under the title'),
			Field::make('textarea', 'fact_learnmore', 'Learn More')
				->set_attribute( 'placeholder', 'Detailed info to display after user clicks LEARN MORE')
		)); // end add_fields
} // end em_attach_post_meta_education
add_action('carbon_fields_register_fields', 'em_custom_carbonfields_education');


// ----------------- CUSTOM POST TYPE: BUSINESSES (For Directory)
// --------------------------------------------------------------
function em_custom_post_businesses() {
	$labels = array(
		'name' => 'Businesses',
		'singular_name' => 'Business',
		'menu_name' => 'TriLocal Business',
		'all_items' => 'All Businesses',
		'view_item' => 'View Business',
		'add_new_item' => 'Add New Business',
		'search_items' => 'Search Businesses',
		'featured_image' => 'Business Image',
		'set_featured_image' => 'Set a business image',
		'remove_featured_image' => 'Remove business image',
	);
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'show_in_rest' => false, // if true, switches to gutenberg block editor
		'capability_type' => 'post',
		'description' => 'Local Tri-City Businesses for use in the Business Directory',
		'supports' => array('title', 'thumbnail', 'revisions'),
		'rewrite' => array('slug' => 'businesses'),
		'menu_icon' => 'dashicons-store',
	);
	register_post_type('em_businesses', $args); // this registers a custom post called 'em_businesses'
}
add_action('init', 'em_custom_post_businesses');

function em_custom_business_change_options($title) {
	$screen = get_current_screen();
  
	if ('em_businesses' == $screen->post_type ) {
		$title = 'Business Name'; // changes the placeholder text for Post Title
		remove_action('media_buttons', 'media_buttons'); // removes the Media button
	}
	return $title; 	// changes the placeholder text for Post Title
}
add_filter('enter_title_here', 'em_custom_business_change_options');

function em_custom_taxonomy_business() {
	$args_category = array(
		'labels' => array(
			'name' => 'Categories',
			'singular_name' => 'Category'
		),
		'public' => true,
		'hierarchical' => true,
	);
	register_taxonomy('categories', array('em_businesses'), $args_category);

	$args_keyword = array(
		'labels' => array(
			'name' => 'Keywords',
			'singular_name' => 'Keyword'
		),
		'public' => true,
		'hierarchical' => false,
	);
	register_taxonomy('keywords', array('em_businesses'), $args_keyword);
}
add_action('init', 'em_custom_taxonomy_business');

function em_custom_carbonfields_business() {
	Container::make('post_meta', 'Business City')
		->where('post_type', '=', 'em_businesses')
		->add_fields(array(
			Field::make( 'radio', 'crb_radio', 'Choose a Tri-City')
				->set_options(array(
					'coquitlam' => 'Coquitlam',
					'portcoquitlam' => 'Port Coquitlam',
					'portmoody' => 'Port Moody',
				))
		)); // end add_fields
	Container::make('post_meta', 'Business Details')
		->where('post_type', '=', 'em_businesses')
		->add_fields(array(
			// Phone Number
			Field::make('text', 'business_phone', 'Phone Number')
				->set_attribute( 'placeholder', '(###) ###-####'),
			// Website
			Field::make('text', 'business_website', 'Website Link')
				->set_attribute( 'placeholder', 'https://'),
			// Address
			Field::make('complex', 'business_address', 'Address')
				->set_duplicate_groups_allowed(false)
				->set_collapsed(false)
				->add_fields(array(
					Field::make('text', 'business_address_street', 'Street Address')
						->set_attribute( 'placeholder', 'e.g. 123 Main Street'),
					Field::make('text', 'business_address_city', 'City')
						->set_attribute( 'placeholder', 'e.g. Vancouver'),
					Field::make('text', 'business_address_postalcode', 'Postal Code')
						->set_attribute( 'placeholder', 'e.g. V3B 1C2'),
				))
				->setup_labels(array(
					'plural_name' => 'Business Address',
					'singular_name' => 'Business Address',
				))
		)); // end add_fields
} // end em_attach_post_meta_business
add_action('carbon_fields_register_fields', 'em_custom_carbonfields_business');