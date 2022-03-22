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

			<div id="carouselExampleCaptions" class="carousel" data-bs-interval="false">

				<div class="carousel-inner">
					<?php
						if (have_posts()) {
							while (have_posts()) {
								the_post();
								get_template_part( 'loop-templates/_em-content', 'partners-carousel' );
							}
						} else {
							get_template_part( 'loop-templates/content', 'none' );
						}
					?>
				</div>

					
				<div class="carousel-indicators">
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" aria-label="" class="active" aria-current="true"></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label=""></button>
					<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="8" aria-label=""></button>
				</div>

				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</button>

				
			</div>



		</div>
			

	</div><!-- containerPartners -->

<?php
get_footer();
