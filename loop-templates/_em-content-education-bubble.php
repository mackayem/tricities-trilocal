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
            <a class="em-fact__link" href="">Learn More</a>
        </div>
    </div>
</div>
