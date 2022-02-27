<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

	<!-- use the index.php file to theme the "Posts" page (which is set to page: Blog) -->
	<div id="em-containerBlog" class="<?php echo esc_attr( $container ); ?> em-container" tabindex="-1">
		<div id="em-wrapperBlog" class="wrapper em-wrapper__div">
			<div id="em-blogHeadingWrapper" class="wrapper">
				<h1 id="em-blogHeading" class="em-heading__h1">Tri-Local Blog</h1>
			</div>
			<?php
				if ( have_posts() ) {
					while ( have_posts() ) {
						the_post();

						get_template_part( 'loop-templates/_em-content', get_post_format() );
					}
				} else {
					get_template_part( 'loop-templates/content', 'none' );
				}
			?>
		</div>

	</div>

<?php
get_footer();
