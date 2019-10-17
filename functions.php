<?php
/**
 * Theme Functions
 *
 * Entire theme's function definitions.
 *
 * @since   1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Scripts & Styles.
 *
 * Frontend with no conditions, Add Custom styles to wp_head.
 *
 * @since  1.0.0
 */
function wpgt_scripts() {
	// Frontend scripts.
	if ( ! is_admin() ) {

		wp_enqueue_script( 'sticky-sidebar', get_template_directory_uri() . '/assets/js/jquery.sticky-sidebar.min.js', array(), '1', true );

		wp_enqueue_script( 'lightcase', get_template_directory_uri() . '/assets/js/lightcase.js', array(), '1', true );

		wp_enqueue_script( 'wpgt_vendorsJs', get_template_directory_uri() . '/assets/js/vendor.min.js' );

		wp_enqueue_script( 'wpgt_customJs', get_template_directory_uri() . '/assets/js/custom.min.js' );

		wp_enqueue_style( 'wpgt_style', get_template_directory_uri() . '/style.min.css', array(), '1.0', 'all' );
	}
}
// Hook.
add_action( 'wp_enqueue_scripts', 'wpgt_scripts' );

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function yoasttobottom() {
	return 'low';
  }
  add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
