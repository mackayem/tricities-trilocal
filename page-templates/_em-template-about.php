<?php
/**
 * Template Name: CUSTOM TRILOCAL-About
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 * @package Understrap
 * 
 * 
 * ================== TO USE THIS TEMPLATE ON A PAGE ==================
 * In Wordpress Dashboard, visit Pages > All Pages
 * Select page titled "Landing", click "Edit"
 * In right-side bar, under "Template", click drop-down to select "CUSTOM TRILOCAL-Landing"
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header(); //load header/navbar
$container = get_theme_mod( 'understrap_container_type' );
?>


<main id="em-main" class="site-main">

	<div id="" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">

        <div id="em-contentAbout" class="wrapper em-wrapper__div">
            <div id="em-aboutTitle" class="">
                <h2 id="em-aboutHeading" class="em-heading__h2">The Tri-Local Collective</h2>
                <img id="" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-spiral-white@2x.png" alt="Decorative background circle">
                <img id="" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-outline-thin-white@2x.png" alt="Decorative background circle">
                <img id="" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-outline-bold-white@2x.png" alt="Decorative background circle">
            </div><!-- col -->
            <div id="em-aboutCopy" class="">
                <?php the_content(); ?>
            </div><!-- col -->
            <div id="em-aboutImages" class="">
                <div id="em-backgroundBox" class="em-div__box--bg"></div>
                <!-- <div id="em-aboutImagesWrapper" class="em-wrapper"> -->
                    <div class="img-wrapper">
                        <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/placeholder_tim-mossholder-3asJCQUw9VA-unsplash.jpg" alt="placeholder"> 
                    </div>

                    <div class="img-wrapper">
                        <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/placeholder_joshua-rodriguez-f7zm5TDOi4g-unsplash.jpg" alt="placeholder">
                    </div>

                    <div class="img-wrapper">
                        <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/placeholder_jakub-kapusnak-4f4YZfDMLeU-unsplash.jpg" alt="placeholder"> 
                    </div>
                <!-- </div> -->
            </div><!-- col -->

        </div><!-- wrapper -->

	</div><!-- container -->
</main><!-- main -->


<?php
get_footer(); // load footer
