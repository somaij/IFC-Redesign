<?php
/**
 * Footer
 *
 * The footer template.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

wp_footer(); ?>
</main>
<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-3 d-flex flex-column">
			<a href="<?php echo get_home_url(); ?>" class="logo-wrapper">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" /></a>
						<?php the_field( 'address', 'option' ); ?>
						<a
						href="tel:+<?php echo preg_replace("/[^0-9]/", "", get_field( 'phone_number', 'option' )); ?>"><?php the_field( 'phone_number', 'option' ); ?></a>
			</div>
			<div class="col-4 offset-lg-3 col-lg-2">
				<h3>About</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-1'
					) );
					?>
			</div>
			<div class="col-4 col-lg-2">
				<h3>Islam</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-2'
					) );
					?>
			</div>
			<div class="col-4 col-lg-2">
				<h3>Events</h3>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-3'
					) );
					?>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<p><?php bloginfo( 'name' ); ?> | All Rights Reserved ©<?php echo date("Y"); ?></p>
			</div>
		</div>
	</div>
</footer>
</body>
</html>
