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
$emailCTAShortCode = '[wpforms id="182"]';
?>

<footer id="em-footerNav" class="site-footer">
	<div id="em-footerDiagonalBox" class="em-wrapper__div--box"></div>

	<div id="em-footerWrapper" class="<?php echo esc_attr( $container ); ?>">

		<section id="em-footerContent" class="em-content__section">
			<div id="em-footerContentMain" class="row">

				<div id="em-footerAddress" class="col em-footer__col">
					<h6 id="em-footerHeaderAddress" class="em-heading__h6">Tri-Cities Chamber of Commerce</h6>
					<div class="d-flex">
						<i class="bi bi-geo-alt-fill"></i>
						<p>#205-2773 Barnet Highway<br>Coquitlam, BC V3B1C2</p>
					</div>
					<div class="d-flex">
						<i class="bi bi-envelope"></i>
						<a href="#">Email</a>
					</div>
				</div><!-- column end -->

				<div id="em-footerSocial" class="col em-footer__col">
					<h6 id="em-footerHeaderSocial" class="em-heading__h6">Follow the Tri-Local Collective</h6>
					<?php get_template_part( 'sidebar-templates/_em-sidebar', 'trilocalsocial' ); ?>
				</div>

				<div id="em-footerFunding" class="col em-footer__col">
					<h6 id="em-footerHeaderFunding" class="em-heading__h6">Thank You</h6>
					<p>Funded by a Federal grant distributed by the BC Chamber of Commerce, from Canada's Ministry of Innovation, Science and Economic Development.</p>
				</div>

				<div id="em-footerMenu" class="col em-footer__col">
					<h6 id="em-footerHeaderMenu" class="em-heading__h6">Site Links</h6>
					<?php
					wp_nav_menu(
						array(
							'theme_location'  => 'primary',
							'container_class' => '',
							'container_id'    => '',
							'menu_class'      => 'em-ulist__menu',
							'menu_id'         => 'em-footer__menu',
							'fallback_cb'     => '',
							'depth'           => 2,
							'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
						)
					);
					?>
				</div>

				<div id="em-footerNewsletter" class="col em-footer__col">
					<h6 id="em-footerHeaderNewsletter" class="em-heading__h6">Sign up for our newsletter</h6>
					<?php echo do_shortcode( $emailCTAShortCode ); ?>
				</div>

				<div id="em-footerPartners" class="col em-footer__col">
					<h6 id="em-footerHeaderPartners" class="em-heading__h6">Our Partners</h6>
					<div id="em-footerPartnersWrapper" class="em-wrapper__div">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/austinheightsbia-white@1x.png" alt="Austin Heights BIA logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/downtownpocobia-white@1x.png" alt="Downtown PoCo BIA logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/shoplocalportmoody-white@1x.png" alt="Shop Local Port Moody logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/tricitieschamber-white@1x.png" alt="Tri-Cities Chamber of Commerce logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/tricitynews-white@1x.png" alt="Tri-City News logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/portmoodyandco-white@1x.png" alt="Port Moody & Co. logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/cityofcoquitlam-white@1x.png" alt="City of Coquitlam logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/cityofportcoquitlam-white@1x.png" alt="City of Port Coquitlam logo">
						<img id="" class="em-img__logo--partner" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/partners/cityofportmoody-white@1x.png" alt="City of Port Moody logo">
					</div>
				</div><!-- row ContentPartners end -->

			</div><!-- row ContentMain end -->

		</section><!-- section end -->

		<section id="em-footerSiteInfo" class="">
		</section><!-- section end -->

	</div><!-- container end -->
</footer><!-- footerNav -->




</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

