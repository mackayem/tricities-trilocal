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

<?php if ( is_active_sidebar( 'trilocalfeaturedposts' ) ) : ?>

	<!-- ******************* Social Widget Area ******************* -->

	<div id="em-blogFeaturedPosts" class="">

        <?php dynamic_sidebar( 'trilocalfeaturedposts' ); ?>

	</div><!-- #social-links -->

	<?php
endif;
