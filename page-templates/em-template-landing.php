<?php
/**
 * Template Name: -TEMPLATE- Landing
 * 
 * Template for displaying the LANDING PAGE without sidebar even if a sidebar widget is published.
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/* === CUSTOM NOTES ===
 * Custom Template for Landing Page
 * In the Wordpress Back-End, page titled "Landing" uses this as a Template
 * Wordpress Back-End: In Settings > Reading > "Your homepage displays" > "A static page" > "Homepage: <Landing>" 
 */


get_header();
?>

<div id="em-wrapperLanding" class="wrapper em-wrapper__div d-flex">

	<div id="em-contentLanding" class="container-fluid em-content__div">
        <div class="row">
            <div class="col-12 col-md-6">
                <!-- imports the all copy shown on page + short-code for Email CTA by WPForms -->
                <?php the_content(); ?> 
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6">
                <div id="em-wrapperLandingPhoto" class="em-wrapper__img">
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
        </div><!-- row -->
	</div><!-- #content -->

</div><!-- #full-width-page-wrapper -->

