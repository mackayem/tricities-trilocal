<?php
/**
 * The template for displaying the partners archive
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>


	<div id="em-containerPartners" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">

		<div id="em-partnersHeadingWrapper" class="wrapper">
			<h1 id="em-partnersHeading" class="em-heading__h1">Our Partners</h1>
		</div>	

		<div id="em-partnersPostsWrapper" class="wrapper">



				<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();
						get_template_part( 'loop-templates/_em-content', 'partners' );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
				?>


		</div><!-- .row -->

		<div id="em-partnersListWrapper" class="wrapper">
			<ul>
				<?php
					if ( have_posts() ) {
						while ( have_posts() ) {
							the_post();
							get_template_part( 'loop-templates/_em-content', 'partners-title' );
						}
					} else {
						get_template_part( 'loop-templates/content', 'none' );
					}
				?>

			</ul>

		</div>
			
		</div>	

	</div><!-- #content -->

<?php
get_footer();
