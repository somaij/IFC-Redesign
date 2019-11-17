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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,700|Playfair+Display&display=swap" rel="stylesheet">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
        <div class="container">
            <div class="row align-items-center">
				<div class="site-branding col-2">
				<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" /></a>
				</div>
				<nav id="desktop-nav" class="main-navigation col-10 text-right d-none d-md-block">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'header-menu',
						'menu_id'        => 'header-menu',
					) );
					?>
				</nav><!-- #site-navigation -->
				<button class="menu-toggle d-block d-md-none text-right" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i> Menu</button>

            </div>
        </div>
	</header><!-- #masthead -->
<nav id="mobile-nav">
		<?php
				wp_nav_menu( array(
					'theme_location' => 'mobile-menu',
					'menu_id'        => 'mobile-menu',
				) );
				?>
	</nav>