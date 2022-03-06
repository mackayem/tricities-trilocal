<?php
/**
 * Template Name: CUSTOM TRILOCAL-Landing
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
 * ================== TO SET PAGE AS HOMEPAGE ==================
 * In Wordpress Dashboard, visit Settings > Reading
 * Under first heading "Your homepage displays", select "A static page"
 * In the dropdown for "Homepage", select "Landing"
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


get_header(); //load header/navbar
$container = get_theme_mod( 'understrap_container_type' );

// if ( is_front_page() ) {
// 	get_template_part( 'global-templates/hero' );
// }
?>

    <div id="em-wrapperLanding" class="wrapper em-wrapper">

        <div id="em-contentLanding" class="<?php echo esc_attr( $container ); ?> em-content__div">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-6">
                    <div id="em-wrapperLandingCopy" class="wrapper em-wrapper">

                        <h2 id="em-landingHeading" class="em-heading__h2"><?php echo carbon_get_the_post_meta('landing_title'); ?> </h2>
                         
                    </div>
                    <!-- wrapperLandingCopy --> 
                    <div id="em-wrapperLandingCTA" class="wrapper em-wrapper">
                        <h3 id="em-landingHeadingCTA" class="em-heading__h3">Subscribe for Tri-Local News</h3>
                        <?php get_template_part('sidebar-templates/_em-sidebar', 'trilocalnewsletter'); ?>
                    </div>
                    <!-- wrapperLandingCTA --> 
                </div><!-- col -->
                <div class="col-12 col-lg-6">
                    <div id="em-wrapperLandingPhoto" class="wrapper em-wrapper">
                        <div id="em-containerLandingPhoto">
                            <?php 
                                // imports the featured image on the page
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                } else {
                                    ?>
                                    <!-- if no featured image set, use one from the assets folder -->
                                    <img id="em-landingElsePhoto" class="em-img--circle" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/imgs/placeholder_markus-spiske-mvu1-Gzg1tg-unsplash.png" alt="placeholder">
                                    <?php
                                }
                            ?>
                        </div>
                    </div>
                    <!-- wrapperLandingPhoto -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- contentLanding -->

    </div><!-- pageLanding (full-page-width wrapper) -->


<?php
get_footer(); // load footer
