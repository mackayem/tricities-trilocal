<?php
/**
 * Partial template for content in page.php
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<div <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<div class="page-header">

		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

	</div><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="page-content">

		<?php
		the_content();
		understrap_link_pages();
		?>

	</div><!-- .entry-content -->

	<div class="page-footer">

		<?php understrap_edit_post_link(); ?>

	</div><!-- .entry-footer -->

</div><!-- #post-## -->
