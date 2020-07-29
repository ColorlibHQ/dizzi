<?php 
/**
 * @Packge 	   : Colorlib
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	/**
	 *
	 * Define constant
	 *
	 */
	
	 
	// Base URI
	if( !defined( 'DIZZI_DIR_URI' ) )
		define( 'DIZZI_DIR_URI', get_template_directory_uri().'/' );
	
	// assets URI
	if( !defined( 'DIZZI_DIR_ASSETS_URI' ) )
		define( 'DIZZI_DIR_ASSETS_URI', DIZZI_DIR_URI.'assets/' );
	
	// Css File URI
	if( !defined( 'DIZZI_DIR_CSS_URI' ) )
		define( 'DIZZI_DIR_CSS_URI', DIZZI_DIR_ASSETS_URI .'css/' );
	
	// Js File URI
	if( !defined( 'DIZZI_DIR_JS_URI' ) )
		define( 'DIZZI_DIR_JS_URI', DIZZI_DIR_ASSETS_URI .'js/' );
	
	// Icon Images
	if( !defined('DIZZI_DIR_ICON_IMG_URI') )
		define( 'DIZZI_DIR_ICON_IMG_URI', DIZZI_DIR_ASSETS_URI.'img/icons/' );
	
	//DIR inc
	if( !defined( 'DIZZI_DIR_INC' ) )
		define( 'DIZZI_DIR_INC', DIZZI_DIR_URI.'inc/' );

	//Elementor Widgets Folder Directory
	if( !defined( 'DIZZI_DIR_ELEMENTOR' ) )
		define( 'DIZZI_DIR_ELEMENTOR', DIZZI_DIR_INC.'elementor-widgets/' );

	// Base Directory
	if( !defined( 'DIZZI_DIR_PATH' ) )
		define( 'DIZZI_DIR_PATH', get_parent_theme_file_path().'/' );
	
	//Inc Folder Directory
	if( !defined( 'DIZZI_DIR_PATH_INC' ) )
		define( 'DIZZI_DIR_PATH_INC', DIZZI_DIR_PATH.'inc/' );
	
	//Colorlib framework Folder Directory
	if( !defined( 'DIZZI_DIR_PATH_LIB' ) )
		define( 'DIZZI_DIR_PATH_LIB', DIZZI_DIR_PATH_INC.'libraries/' );
	
	//Classes Folder Directory
	if( !defined( 'DIZZI_DIR_PATH_CLASSES' ) )
		define( 'DIZZI_DIR_PATH_CLASSES', DIZZI_DIR_PATH_INC.'classes/' );

	
	//Widgets Folder Directory
	if( !defined( 'DIZZI_DIR_PATH_WIDGET' ) )
		define( 'DIZZI_DIR_PATH_WIDGET', DIZZI_DIR_PATH_INC.'widgets/' );
		
	//Elementor Widgets Folder Directory
	if( !defined( 'DIZZI_DIR_PATH_ELEMENTOR_WIDGETS' ) )
		define( 'DIZZI_DIR_PATH_ELEMENTOR_WIDGETS', DIZZI_DIR_PATH_INC.'elementor-widgets/' );
	

		
	/**
	 * Include File
	 *
	 */
	
	// Breadcrumbs file include
	require_once( DIZZI_DIR_PATH_INC . 'dizzi-breadcrumbs.php' );
	// Sidebar register file include
	require_once( DIZZI_DIR_PATH_INC . 'widgets/dizzi-widgets-reg.php' );
	// Post widget file include
	require_once( DIZZI_DIR_PATH_INC . 'widgets/dizzi-recent-post-thumb.php' );
	// News letter widget file include
	require_once( DIZZI_DIR_PATH_INC . 'widgets/dizzi-newsletter-widget.php' );
	//Social Links
	require_once( DIZZI_DIR_PATH_INC . 'widgets/dizzi-social-links.php' );
	// Instagram Widget
	require_once( DIZZI_DIR_PATH_INC . 'widgets/dizzi-instagram.php' );
	// Nav walker file include
	require_once( DIZZI_DIR_PATH_INC . 'wp_bootstrap_navwalker.php' );
	// Theme function file include
	require_once( DIZZI_DIR_PATH_INC . 'dizzi-functions.php' );

	// Theme Demo file include
	require_once( DIZZI_DIR_PATH_INC . 'demo/demo-import.php' );

	// Post Like
	require_once( DIZZI_DIR_PATH_INC . 'post-like.php' );
	// Theme support function file include
	require_once( DIZZI_DIR_PATH_INC . 'support-functions.php' );
	// Html helper file include
	require_once( DIZZI_DIR_PATH_INC . 'wp-html-helper.php' );
	// Pagination file include
	require_once( DIZZI_DIR_PATH_INC . 'wp_bootstrap_pagination.php' );
	// Elementor Widgets
	require_once( DIZZI_DIR_PATH_ELEMENTOR_WIDGETS . 'elementor-widget.php' );
	//
	require_once( DIZZI_DIR_PATH_CLASSES . 'Class-Enqueue.php' );
	
	require_once( DIZZI_DIR_PATH_CLASSES . 'Class-Config.php' );
	// Customizer
	require_once( DIZZI_DIR_PATH_INC . 'customizer/customizer.php' );
	// Class autoloader
	require_once( DIZZI_DIR_PATH_INC . 'class-epsilon-dashboard-autoloader.php' );
	// Class dizzi dashboard
	require_once( DIZZI_DIR_PATH_INC . 'class-epsilon-init-dashboard.php' );
	// Common css
	require_once( DIZZI_DIR_PATH_INC . 'dizzi-commoncss.php' );


	if( class_exists( 'RW_Meta_Box' ) ){
		// Metabox Function
		require_once( DIZZI_DIR_PATH_INC . 'dizzi-metabox.php' );
	}


	// Admin Enqueue Script
	function dizzi_admin_script(){
		wp_enqueue_style( 'dizzi-admin', get_template_directory_uri().'/assets/css/dizzi_admin.css', false, '1.0.0' );
		wp_enqueue_script( 'dizzi_admin', get_template_directory_uri().'/assets/js/dizzi_admin.js', false, '1.0.0' );
	}
	add_action( 'admin_enqueue_scripts', 'dizzi_admin_script' );

	 
	// WooCommerce style desable
	add_filter( 'woocommerce_enqueue_styles', '__return_false' );


	/**
	 * Instantiate Dizzi object
	 *
	 * Inside this object:
	 * Enqueue scripts, Google font, Theme support features, Dizzi Dashboard .
	 *
	 */
	
	$Dizzi = new Dizzi();
	
