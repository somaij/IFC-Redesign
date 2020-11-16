<?php
/**
 * Theme Header
 *
 * Header data.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title();?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700|Playfair+Display&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<nav id="desktop" class="d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
				<div class="site-branding col-2">
				<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" /></a>
				</div>
				<div id="desktop-nav" class="main-navigation col-10 text-right">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'header-menu',
					) );
					?>
				</div><!-- #site-navigation -->
            </div>
        </div>
	</nav><!-- #masthead -->
	<nav id="mobile" class="d-flex d-lg-none justify-content-between align-items-center">
		<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" /></a>
		<button class="hamburger hamburger--spring" type="button" aria-label="Menu" aria-controls="navigation">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</button>
		<div id="mobile_menu">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		</div>
	</nav>