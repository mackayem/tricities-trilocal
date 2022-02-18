<?php
/**
 * Widget for Partner Logos
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'trilocalpartnerlogos' ) ) : ?>

	<!-- ******************* Social Widget Area ******************* -->

	<div id="partner-logos" class="">

        <?php dynamic_sidebar( 'trilocalpartnerlogos' ); ?>

	</div><!-- #partner-logos -->

	<?php
endif;
