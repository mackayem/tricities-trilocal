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
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="em-headerNavbar" class="em-header">

		<div id="em-headerLogoWrapper" class="em-wrapper__div--logo">
			<img id="em-headerLogo" class="em-img__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-grey.png" alt="Tri-Local logo">
		</div>
		<div id="em-headerDiagonalBox" class="em-wrapper__div--box"></div>
		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary em-nav" aria-labelledby="main-nav-label">

			<!-- use the GLOBAL-ASSETS/"navbar-collapse-bootstrap5.php" template for the rest of the custom header styling -->
			<?php get_template_part( 'global-templates/navbar-collapse-bootstrap5', $navbar_type . '-' . $bootstrap_version ); ?>
		
		</nav><!-- .site-navigation -->


	</header><!-- #wrapper-navbar end -->
