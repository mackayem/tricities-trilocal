<?php
/**
 * The template part for displaying a message that posts cannot be found
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<section class="not-found em-notFound">


	<h3 class="page-title em-notFound__title"><?php esc_html_e( 'Nothing Found', 'understrap' ); ?></h3>


	<div class="page-content em-notFound__content">

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			$kses = array( 'a' => array( 'href' => array() ) );
			printf(
				/* translators: 1: Link to WP admin new post page. */
				'<p>' . wp_kses( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'understrap' ), $kses ) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		else :

			printf(
				'<p>%s<p>',
				esc_html__( 'There are no blog posts yet, please check back soon!', 'understrap' )
			);

		endif;
		?>
	</div><!-- .page-content -->

</section><!-- .no-results -->
