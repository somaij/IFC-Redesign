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

		// Styles
		wp_enqueue_style( 'aos_style', get_template_directory_uri() . '/assets/vendor/aos/aos.css',  array(), '1.0', 'all'  );

		wp_enqueue_style( 'lightcase_style', get_template_directory_uri() . '/assets/vendor/lightcase/css/lightcase.css',  array(), '1.0', 'all'  );

		wp_enqueue_style( 'wpgt_style_slick', get_template_directory_uri() . '/assets/vendor/slick/slick.css',  array(), '1.0', 'all'  );

		wp_enqueue_style( 'wpgt_style', get_template_directory_uri() . '/style.min.css', array(), '1.1', 'all' );

		// Scripts
		wp_enqueue_script( 'aos_js', get_template_directory_uri() . '/assets/vendor/aos/aos.js' );

		wp_enqueue_script( 'lightcase_js', get_template_directory_uri() . '/assets/vendor/lightcase/js/lightcase.js', array('jquery'), '1.0', false  );

		wp_enqueue_script( 'wpgt_slickJs', get_template_directory_uri() . '/assets/vendor/slick/slick.min.js', array('jquery'), '1.0', true );

		wp_enqueue_script( 'sticky-sidebar', get_template_directory_uri() . '/assets/js/jquery.sticky-sidebar.min.js', array(), '1', true );

		// Enqueue vendor JS after vendors to call those libraries.
		wp_enqueue_script( 'wpgt_vendorsJs', get_template_directory_uri() . '/assets/js/vendor.min.js', array('jquery'), '1.0', true );

		// Enqueue custom JS last.
		wp_enqueue_script( 'wpgt_customJs', get_template_directory_uri() . '/assets/js/custom.min.js', array('jquery'), '1.0', true );

		
	}
}
// Hook.
function register_menus() {
	register_nav_menus(
		array(
		  'header-menu' => __( 'Header Menu' ),
		  'mobile-menu' => __( 'Mobile Menu' ),
		  'footer-menu-1' => __( 'Footer Menu 1' ),
		  'footer-menu-2' => __( 'Footer Menu 2' ),
		  'footer-menu-3' => __( 'Footer Menu 3' )
		)
	  );
	}

  add_action( 'init', 'register_menus' );
  add_action( 'customize_register', 'ja_remove_customizer_options', 30 );
  function tn_custom_excerpt_length( $length ) {
   return 25;
   }
   add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );
   remove_filter( 'the_content', 'wpautop' );
   remove_filter ('acf_the_content', 'wpautop');
add_action( 'wp_enqueue_scripts', 'wpgt_scripts' );

add_theme_support( 'post-thumbnails' ); 

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
}

function yoasttobottom() {
	return 'low';
  }
  add_filter( 'wpseo_metabox_prio', 'yoasttobottom');
