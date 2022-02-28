<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header em-partnersPost em-partnersPost__header">
		<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	</header><!-- .entry-header -->

	<div class="entry-content em-partnersPost em-partnersPost__content">

		<?php
            the_content();
            understrap_link_pages();
		?>

	</div><!-- .entry-content -->

    <footer class="entry-footer em-partnersPost em-partnersPost__footer">



            <div class="entry-meta em-partnersPost em-partnersPost__meta">
                <button type="button" href="<?php echo carbon_get_the_post_meta('partner_website'); ?>">Learn More</button>
            </div><!-- .entry-meta -->


	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
