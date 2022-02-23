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


<div id="em-pageLanding" class="wrapper em-wrapper__div">

    <div id="em-contentLanding" class="<?php echo esc_attr( $container ); ?> em-content__div">
        <div class="row">
            <div class="col-12">
                <?php 
                    the_content();
                    get_template_part( 'sidebar-templates/_em-sidebar', 'trilocalnewsletter' );
                ?> 
            </div><!-- col -->
        </div><!-- row -->
        <div class="row">
            <div class="col-12">
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
                </div><!-- wrapperLandingPhoto -->
            </div><!-- col -->
        </div><!-- row -->
	</div><!-- contentLanding -->

</div><!-- pageLanding (full-page-width wrapper) -->


<?php
get_footer(); // load footer
