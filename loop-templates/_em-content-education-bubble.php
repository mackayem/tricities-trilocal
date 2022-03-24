<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<div class="em-fact__circle" <?php post_class(); ?> id="post-<?php the_ID(); ?>">
  <div class="em-fact__content">
    <div class="em-fact__title--wrapper">
      <?php the_title( '<h4 class="em-fact__title">', '</h4>' ); ?>
    </div>
    <div class="em-fact__blurb--wrapper">
      <p class="em-fact__blurb"><?php echo carbon_get_the_post_meta('fact_blurb'); ?></p>
    </div>
    <div class="em-fact__link--wrapper">
      <a class="em-fact__link" data-bs-toggle="modal" data-bs-target="#em-educationModal-<?php the_ID(); ?>">Learn More</a>
    </div>
  </div>
</div>


<div class="modal fade" id="em-educationModal-<?php the_ID(); ?>" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div class="em-fact__title--wrapper">
          <?php the_title( '<h4 class="em-fact__title">', '</h4>' ); ?>
        </div>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php the_content(); ?>
        <?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>	
      </div>
      <div class="modal-footer">
        <p class="em-fact__blurb"><?php echo carbon_get_the_post_meta('fact_cite'); ?></p>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>