<?php
/**
 * Widget for Social Media Icons & Links
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'trilocalsocial' ) ) : ?>

	<!-- ******************* Social Widget Area ******************* -->

	<div id="social-links" class="">

        <?php dynamic_sidebar( 'trilocalsocial' ); ?>

	</div><!-- #social-links -->

	<?php
endif;
