<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="carousel-item" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
    <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>	
<div class="carousel-caption d-none">
    <?php
        the_content();
	?>
    <div class="entry-meta em-partnersPost em-partnersPost__meta">
        <button type="button" href="<?php echo carbon_get_the_post_meta('partner_website'); ?>">Learn More</button>
    </div><!-- .entry-meta -->
</div>
</div>




