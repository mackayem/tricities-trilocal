<?php
/**
 * Widget for Email Link in Footer
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'trilocalemail' ) ) : ?>

	<!-- ******************* Social Widget Area ******************* -->

	<div id="em-FooterEmailWrapper" class="em-wrapper em-wrapper__link">

        <?php dynamic_sidebar( 'trilocalemail' ); ?>

	</div><!-- #social-links -->

	<?php
endif;