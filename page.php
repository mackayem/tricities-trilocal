<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>


<main id="em-main" class="site-main">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<?php get_template_part( 'loop-templates/content', 'page' ); ?>

	</div><!-- #content -->
</main><!-- #main -->

<?php
get_footer();
