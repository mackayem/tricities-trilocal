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

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

    <div class="container-fluid">
        <!-- <footer class="site-footer" id="colophon"> -->
            <!-- <div class="site-info"> -->

            <div id="footer-diagonal-box" class="em-nav__box"></div>

            <!-- </div>.site-info -->
        <!-- </footer>#colophon -->
    </div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

