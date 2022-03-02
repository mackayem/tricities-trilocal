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

// Assign all the partner posts to variables
$triCitiesChamber = get_post(596);
$cityofCoq = get_post(598);
$cityofPoco = get_post(600);
$cityOfPortMoody = get_post(602);
$triCityNews = get_post(604);
$austinHeightsBIA = get_post(606);
$downtownPocoBIA = get_post(608);
$portMoodyAndCo = get_post(610);
$shopLocalPortMoody = get_post(612);

?>


	<div id="em-containerPartners" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">

		<div id="em-partnersHeadingWrapper" class="wrapper">
			<h1 id="em-partnersHeading" class="em-heading__h1">Our Partners</h1>
		</div>	

		<div id="em-partnersPostsWrapper" class="wrapper">



			<div id="carouselExampleCaptions" class="carousel" data-bs-interval="false">
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


				<div class="carousel-inner">


					<div class="carousel-item active">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($triCitiesChamber); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $triCitiesChamber->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://tricitieschamber.com">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($cityofCoq); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $cityofCoq->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://www.coquitlam.ca">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($cityofPoco); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $cityofPoco->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://www.portcoquitlam.ca">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($cityOfPortMoody); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $cityOfPortMoody->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://www.portmoody.ca">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($triCityNews); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $triCityNews->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://www.tricitynews.com">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($austinHeightsBIA); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $austinHeightsBIA->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://austinheights.ca">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($downtownPocoBIA); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $downtownPocoBIA->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://downtownpocobia.com">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($portMoodyAndCo); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $portMoodyAndCo->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://www.portmoodyandco.com">Learn More</button>
						</div>
					</div>

					<div class="carousel-item">
						<div class="carousel-item-img">
							<?php echo get_the_post_thumbnail($shopLocalPortMoody); ?>
						</div>
						<div class="carousel-item-copy">
							<?php echo apply_filters( 'the_content', $shopLocalPortMoody->post_content ); ?>
						</div>
						<div class="carousel-item-button">
							<button type="button" href="https://shoplocalportmoody.ca">Learn More</button>
						</div>
					</div>


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
			

	</div><!-- containerPartners -->

<?php
get_footer();
