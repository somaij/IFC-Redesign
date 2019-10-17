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

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header>
        <div class="container-fluid">
            <div class="row">
				<div class="site-branding col-2">
					
				</div>
				<nav id="site-navigation" class="main-navigation col-10 text-right">
					<div class="d-none d-md-inline">
					<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
					) );
					?>
                    </div>
                    <button class="menu-toggle d-block d-md-none text-right" aria-controls="primary-menu" aria-expanded="false"><i class="fas fa-bars"></i> Menu</button>
				</nav><!-- #site-navigation -->
                
            </div>
        </div>
        <nav class="mobile-nav">
            <?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-mobile-menu',
					) );
					?>
        </nav>
	</header><!-- #masthead -->
