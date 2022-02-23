<?php
/**
 * Widget for Newsletter
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<?php if ( is_active_sidebar( 'trilocalnewsletter' ) ) : ?>

	<!-- ********** "TRILOCAL-Newsletter" Widget (imported as a template part) ********** -->
	<div id="em-wrapperNewsletterWidget" class="wrapper em-wrapper">

        <?php dynamic_sidebar( 'trilocalnewsletter' ); ?>

	</div><!-- #partner-logos -->

	<?php
endif;