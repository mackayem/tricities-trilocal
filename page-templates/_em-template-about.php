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



<div id="em-containerAbout" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">

    <div id="em-wrapperAbout" class="wrapper em-wrapper__div">
        <div id="em-aboutTitle" class="em-section__div">
            <h2 id="em-aboutHeading" class="em-heading__h2">The Tri-Local Collective</h2>
            <img id="em-aboutTitleCircle1" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-spiral-white@2x.png" alt="Decorative background circle">
            <img id="em-aboutTitleCircle2" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-outline-thin-white@2x.png" alt="Decorative background circle">
            <img id="em-aboutTitleCircle3" class="em-img--decorative" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/decorative/circle-outline-bold-white@2x.png" alt="Decorative background circle">
        </div><!-- col -->
        <div id="em-aboutCopy" class="em-section__div">
            <?php the_content(); ?>
        </div><!-- col -->
        <div id="em-aboutImages" class="em-section__div">
            <div id="em-backgroundBox" class="em-div__box--bg"></div>
                <div class="em-img__wrapper">
                    <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/about/trilocal-team 1@1x.png" alt="The Tri-Local team presenting a Tri-Local branded sign"> 
                </div>

                <div class="em-img__wrapper">
                    <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/about/trilocal-logo 1@1x.png" alt="The Tri-Local logo">
                </div>

                <div class="em-img__wrapper">
                    <img id="" class="em-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/about/trilocal-shop 1@1x.png" alt="A shopkeeper hanging an open sign on a door"> 
                </div>
        </div><!-- col -->

    </div><!-- wrapper -->

</div><!-- container -->


<?php
get_footer(); // load footer
