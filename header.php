<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar" class="em-header">

		<div class="em-nav__logo">
			<img id="header-logo" class="em-img__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-blue.png" alt="Tri-Local logo">
		</div>
		<div class="em-nav__box"></div>
		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary em-nav" aria-labelledby="main-nav-label">

			<?php get_template_part( 'global-templates/navbar-collapse-bootstrap5', $navbar_type . '-' . $bootstrap_version ); ?>
		
		</nav><!-- .site-navigation -->


	</header><!-- #wrapper-navbar end -->
