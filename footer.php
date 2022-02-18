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
	<div id="em-footerWrapper" class="<?php echo esc_attr( $container ); ?>">

		<section id="em-footerContent" class="">
			<div id="em-footerContentMain" class="row">

				<div class="col">
					<h6 id="em-footerHeaderAddress" class="em-heading__h6">Tri-Cities Chamber of Commerce</h6>
					<div id="" class="">
						<i class="bi bi-geo-alt-fill"></i>
						<p>#205-2773 Barnet Highway<br>Coquitlam, BC V3B1C2</p>
					</div>
					<div id="" class="">
						<i class="bi bi-envelope"></i>
						<p><a href="">Email Us</a></p>
					</div>
				</div><!-- column end -->

				<div class="col">
					<h6 id="em-footerHeaderSocial" class="em-heading__h6">Follow the Tri-Local Collective</h6>
					<?php get_template_part( 'sidebar-templates/_em-sidebar', 'trilocalsocial' ); ?>
				</div>

				<div class="col">
					<h6 id="em-footerHeaderSocial" class="em-heading__h6">Thank You</h6>
					<p>Funded by a Federal grant distributed by the BC Chamber of Commerce, from Canada's Ministry of Innovation, Science and Economic Development.</p>
				</div>

				<div class="col">
					<h6 id="em-footerHeaderSocial" class="em-heading__h6">Site Links</h6>
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

				<div class="col">
					<h6 id="em-footerHeaderSocial" class="em-heading__h6">Sign up for our newsletter</h6>
					<?php echo do_shortcode( $emailCTAShortCode ); ?>
				</div>

			</div><!-- row ContentMain end -->

			<div id="em-footerContentPartners" class="row">
			</div><!-- row ContentPartners end -->

		</section><!-- section end -->

		<section id="em-footerSiteInfo" class="">
		</section><!-- section end -->

	</div><!-- container end -->
</footer><!-- footerNav -->




</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

