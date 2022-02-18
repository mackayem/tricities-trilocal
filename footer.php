<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<footer class="site-footer" id="colophon">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">
			<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>
		</div>

		<div class="row">
			<div class="site-info">

			</div><!-- .site-info -->
		</div>

	</div><!-- container end -->

</footer><!-- #colophon -->




</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

