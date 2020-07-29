<?php 
/**
 * @Packge     : Dizzi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */

if( !defined( 'WPINC' ) ){
    die;
}

// demo import file
function dizzi_import_files() {
	
	$demoImg = '<img src="'. DIZZI_DIR_INC . 'demo/screen-image.jpg' .' " alt="'.esc_attr__( 'Demo Preview Imgae', 'dizzi' ).'" />';
	
  return array(
    array(
      'import_file_name'             => 'Dizzi Demo',
      'local_import_file'            => DIZZI_DIR_PATH_INC .'demo/dizzi-demo.xml',
      'local_import_widget_file'     => DIZZI_DIR_PATH_INC .'demo/dizzi-widgets.wie',
      'import_customizer_file_url'   => DIZZI_DIR_INC . 'demo/dizzi-customizer.dat',
      'import_notice' => $demoImg,
    ),
  );
}
add_filter( 'pt-ocdi/import_files', 'dizzi_import_files' );
	
// demo import setup
function dizzi_after_import_setup() {
	// Assign menus to their locations.
    $main_menu    	  = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$best_services    = get_term_by( 'name', 'Best Services', 'nav_menu' );

	set_theme_mod( 'nav_menu_locations', array(
            'primary-menu' => $main_menu->term_id,
            'best-services' => $best_services->term_id,
		)
	);

	// Assign front page and posts page (blog page).
	$front_page_id = get_page_by_title( 'Homepage' );
	$blog_page_id  = get_page_by_title( 'Blog' );

	update_option( 'show_on_front', 'page' );
	update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );
	update_option( 'dizzi_demodata_import', 'yes' );

}
add_action( 'pt-ocdi/after_import', 'dizzi_after_import_setup' );

//disable the branding notice after successful demo import
add_filter( 'pt-ocdi/disable_pt_branding', '__return_true' );

//change the location, title and other parameters of the plugin page
function dizzi_import_plugin_page_setup( $default_settings ) {
	$default_settings['parent_slug'] = 'themes.php';
	$default_settings['page_title']  = esc_html__( 'One Click Demo Import' , 'dizzi' );
	$default_settings['menu_title']  = esc_html__( 'Import Demo Data' , 'dizzi' );
	$default_settings['capability']  = 'import';
	$default_settings['menu_slug']   = 'dizzi-demo-import';

	return $default_settings;
}
add_filter( 'pt-ocdi/plugin_page_setup', 'dizzi_import_plugin_page_setup' );

// Enqueue scripts
function dizzi_demo_import_custom_scripts(){
	
	
	if( isset( $_GET['page'] ) && $_GET['page'] == 'dizzi-demo-import' ){
		// style
		wp_enqueue_style( 'dizzi-demo-import', DIZZI_DIR_INC . 'demo/css/demo-import.css', array(), '1.0', false );
	}
	
	
}
add_action( 'admin_enqueue_scripts', 'dizzi_demo_import_custom_scripts' );



?>