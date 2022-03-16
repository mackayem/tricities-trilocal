<?php
/**
 * The template for displaying all single posts
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

	<div id="em-containerSingle" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">
		<div id="em-wrapperSingle" class="wrapper em-wrapper__div">
			<?php
			while ( have_posts() ) {
				the_post();
				get_template_part( 'loop-templates/_em-content', 'single' );
				understrap_post_nav();

				// If comments are open or we have at least one comment, load up the comment template.
				// if ( comments_open() || get_comments_number() ) {
				// 	comments_template();
				// }
			}
			?>
		</div>
	</div>

<?php
get_footer();
