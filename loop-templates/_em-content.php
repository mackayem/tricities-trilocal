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

	<header class="entry-header em-blogPost__header--excerpt">

		<?php
		the_title(
			sprintf( '<h5 class="entry-title em-blogPost__title--excerpt"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h5>'
		);
		?>

	</header><!-- .entry-header -->

    <div class="entry-photo em-blogPost__photo--excerpt">
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
    </div>

	<div class="entry-content em-blogPost__content--excerpt">

		<?php
            the_excerpt();
            understrap_link_pages();
		?>

	</div><!-- .entry-content -->

    <footer class="entry-footer em-blogPost__footer--excerpt">

        <?php if ( 'post' === get_post_type() ) : ?>

            <div class="entry-meta em-blogPost__meta--excerpt">
                <?php em_posted_on_excerpt(); ?>
            </div><!-- .entry-meta -->

        <?php endif; ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
