<?php
/**
 * The template for displaying the partners archive
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>

	<div id="em-containerEducation" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">

		<div id="em-educationHeadingWrapper" class="wrapper">
			<h1 id="em-educationHeading" class="em-heading__h1">Did You Know?</h1>
		</div>	
			
	</div>

<?php
get_footer();


