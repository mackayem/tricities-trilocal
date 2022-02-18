<?php
/**
 * Sidebar setup for footer full
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );

?>

<?php if ( is_active_sidebar( 'footerfull' ) ) : ?>

	<!-- ******************* The Footer Full-width Widget Area ******************* -->

	<div id="wrapper-footer-full" class="wrapper em-footer__wrapper" role="footer">

		<div id="footer-full-content" class="<?php echo esc_attr( $container ); ?> em-footer__content" tabindex="-1">

			<?php dynamic_sidebar( 'footerfull' ); ?>

		</div>

	</div><!-- #wrapper-footer-full -->

	<?php
endif;
