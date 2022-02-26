<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> and <header> sections and everything up till <main id="em-main">
 * 
 * -----------------IMPORTANT NOTES---------------
 * DO NOT REMOVE THE <main> OPENING TAG FOUND AT THE END OF THIS FILE
 * It is closed at the beginning of the footer.php file
 * DO NOT REMOVE THE <div> OPENING TAG FOUND AFTER THE <body> TAG
 * It is closed at the end of the footer.php file
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$container = get_theme_mod( 'understrap_container_type' );
$navbar_type = get_theme_mod( 'understrap_navbar_type', 'collapse' );

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
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<?php wp_head(); ?>
</head>


<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>



	<header id="em-headerNavbar" class="em-header site-header">

		<div id="em-headerLogoWrapper" class="em-wrapper__div--logo">
			<img id="em-headerLogo" class="em-img__logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/logos/logo-grey.png" alt="Tri-Local logo">
		</div>
		<div id="em-headerDiagonalBox" class="em-wrapper__div--box"></div>
		
		<nav id="main-nav" class="navbar navbar-expand-md navbar-dark bg-primary em-nav" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="screen-reader-text">
				<?php esc_html_e( 'Main Navigation', 'understrap' ); ?>
			</h2>

			<div class="<?php echo esc_attr( $container ); ?>">
				<button id="em-buttonNavHamburger" class="navbar-toggler em-button" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span id="em-buttonNavHamburgerIcon" class="navbar-toggler-icon em-span"></span>
				</button>
			</div>

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
		
		</nav><!-- end #main-nav -->

	</header><!-- end .site-header -->



	
	<main id="em-main" class="em-main site-main">