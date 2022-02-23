<?php
/**
 * Widget for Newsletter
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'trilocalnewsletter' ) ) : ?>

	<!-- ******************* Social Widget Area ******************* -->

	<div id="em-newsletterWidget" class="">

        <?php dynamic_sidebar( 'trilocalnewsletter' ); ?>

	</div><!-- #partner-logos -->

	<?php
endif;