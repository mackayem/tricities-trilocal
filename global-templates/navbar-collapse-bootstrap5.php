<?php
/**
 * Header Navbar (bootstrap5)
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<h2 id="main-nav-label" class="screen-reader-text">
	<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
</h2>


<div class="container-fluid">

	<!-- Your site title as branding in the menu -->
	<!-- end custom logo -->

	<button id="em-buttonNavHamburger" class="navbar-toggler em-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
		<span id="em-buttonNavHamburgerIcon" class="navbar-toggler-icon em-span"></span>
	</button>

	<!-- The WordPress Menu goes here -->
	<?php
	wp_nav_menu(
		array(
			'theme_location'  => 'primary',
			'container_class' => 'collapse navbar-collapse',
			'container_id'    => 'navbarNavDropdown',
			'menu_class'      => 'navbar-nav ms-auto em-ulist__menu',
			'menu_id'         => 'main-menu',
			'fallback_cb'     => '',
			'depth'           => 2,
			'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
		)
	);
	?>

</div><!-- .container(-fluid) -->
