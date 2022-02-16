<?php
/**
 * Template Name: -TEMPLATE- Landing
 * 
 * Template for displaying the LANDING PAGE without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* === CUSTOM NOTES ===
 * Custom Template for Landing Page
 * In the Wordpress Back-End, page titled "Landing" uses this as a Template
 * Wordpress Back-End: In Settings > Reading > "Your homepage displays" > "A static page" > "Homepage: <Landing>" 
 */


get_header();
?>

<div id="em-wrapperLanding" class="wrapper em-wrapper__div">
	<div id="em-contentLanding" class="container-fluid em-content__div">
		<?php the_content(); ?> <!-- imports the short-code for the Email CTA by WPForms -->
	</div><!-- #content -->
</div><!-- #full-width-page-wrapper -->

