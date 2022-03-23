<?php
/**
 * Post rendering content according to caller of get_template_part
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<li id="em-partnersListPost<?php the_ID(); ?>">
	<?php
	the_title(
		sprintf( 
			'<h3 class="entry-title">', esc_url( get_permalink() ) ),'</h3>'
		);
	?>
</li>