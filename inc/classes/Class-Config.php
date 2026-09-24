<?php 
/**
 * @Packge 	   : Dizzi
 * @Version    : 1.0
 * @Author 	   : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
	// Block direct access
	if( !defined( 'ABSPATH' ) ){
		exit( 'Direct script access denied.' );
	}

	// Final Class
	final class Dizzi{

		
		// Theme Version
		private $dizzi_version = '1.0';

		// Minimum WordPress Version required
		private $min_wp = '5.2';

		// Minimum PHP version required 
		private $min_php = '7.0';

		function __construct(){
			// Theme Support
			add_action( 'after_setup_theme', array( $this, 'support' ) );
			// 
			$this->init();
		}

		// Theme init
		public function init(){
			//
			$this->setup();

			// customizer init Instantiate
			$this->customizer_init();
			
		}

		// Theme setup
		private function setup(){
			
			// Create enqueue class instance
			$enqueu = new dizzi_Enqueue();
			$enqueu->scripts = $this->enqueue() ;
			$enqueu->dizzi_scripts_enqueue_init() ;

		}
		// Theme Support
		public function support(){
			// content width
	        $GLOBALS['content_width'] = apply_filters( 'dizzi_content_width', 751 );

	        
	        // text domain for translation.
	        load_theme_textdomain( 'dizzi', DIZZI_DIR_PATH . '/languages' );
	        
	        // support title tage
	        add_theme_support( 'title-tag' );
	        
	        // support logo
			add_theme_support( 'custom-logo', array(
				'height'      => 23,
				'width'       => 69,
				'flex-height' => true,
				'flex-width'  => true,
				'header-text' => array( 'site-title', 'site-description' ),
			) );

			//Custom Hreader
			add_theme_support( 'custom-header', array(
				'flex-width'    => true,
				'width'         => 1920,
				'flex-height'   => true,
				'height'        => 424
			) );

			//Custom background
			add_theme_support( 'custom-background', array(
				'default-color' => 'ffffff'
			) );

	        //  support post format
	        add_theme_support( 'post-formats', array( 'video','audio' ) );
	        
	        // support post-thumbnails
	        add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
			
			// Site logo size
			add_image_size( 'dizzi_logo_69x23', 69, 23, true );

			// Client logo size
			add_image_size( 'dizzi_client_logo_120x60', 120, 60, true );
			
			// About image size
			add_image_size( 'dizzi_about_img_555x600', 555, 600, true );
						
			// Project image size
			add_image_size( 'dizzi_project_img_555x410', 555, 410, true );
			add_image_size( 'dizzi_project_inner_img_750x750', 750, 750, true );
						
			// Creative image size
			add_image_size( 'dizzi_creative_img_974x774', 974, 774, true );
						
			// Client image size
			add_image_size( 'dizzi_client_img_90x90', 90, 90, true );

			// Home blog post image size
			add_image_size( 'dizzi_home_blog_360x389', 360, 389, true );

			// Latest post thumbnail Widget thumbnail size
			add_image_size( 'dizzi_widget_post_thumb', 80, 80, true );

			// Single blog post image size
			add_image_size( 'dizzi_single_blog_750x375', 750, 375, true );
			add_image_size( 'dizzi_np_thumb', 60, 60, true );
	        	        
	        // support automatic feed links
	        add_theme_support( 'automatic-feed-links' );
	        
	        // support html5
	        add_theme_support( 'html5' );
			
			// Add theme support for selective refresh for widgets.
			add_theme_support( 'customize-selective-refresh-widgets' );
						    
	        // register nav menu
	        register_nav_menus( array(
	            'primary-menu'   		=> esc_html__( 'Main Menu', 'dizzi' ),
				'footer-column-1-menu'  => esc_html__( 'Footer Column-1 Menu', 'dizzi' ),
				'company'   			=> esc_html__( 'Company', 'dizzi' ),
				'resources'   			=> esc_html__( 'Resources', 'dizzi' ),
	        ) );

	        // editor style
	        add_editor_style('assets/css/editor-style.css');

		} // end support method

		// enqueue theme style and script
		private function enqueue(){

			$cssPath = DIZZI_DIR_CSS_URI;
			$jsPath  = DIZZI_DIR_JS_URI;

			$scripts = array(
				'style' => array(
					array(
						'handler'		=> 'dizzi-google-font',
						'file' 			=> $this->google_font(),
					),
					array(
						'handler'		=> 'dizzi-bootstrap',
						'file' 			=> $cssPath.'bootstrap.min.css',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-5',
					),
					array(
						'handler'		=> 'dizzi-animate',
						'file' 			=> $cssPath.'animate.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-owl-carousel',
						'file' 			=> $cssPath.'owl.carousel.min.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-font-awesome',
						'file' 			=> $cssPath.'font-awesome.min.css',
						'dependency' 	=> array(),
						'version' 		=> '7.3.1-1',
					),
					array(
						'handler'		=> 'dizzi-themify',
						'file' 			=> $cssPath.'themify-icons.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-flaticon',
						'file' 			=> $cssPath.'flaticon.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-magnific-popup-css',
						'file' 			=> $cssPath.'magnific-popup.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-slick-css',
						'file' 			=> $cssPath.'slick.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-default-css',
						'file' 			=> $cssPath.'default.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					array(
						'handler'		=> 'dizzi-style-css',
						'file' 			=> $cssPath.'style.css',
						'dependency' 	=> array(),
						'version' 		=> '1.0',
					),
					
					array(
						'handler'		=> 'dizzi-style',
						'file' 			=> get_stylesheet_uri(),
					),
				),
				
				'scripts' => array(
					array(
						'handler'		=> 'dizzi-bootstrap',
						'file' 			=> $jsPath.'bootstrap.min.js',
						'dependency' 	=> array(),
						'version' 		=> '5.3.8-4',
						'in_footer' 	=> true
					),

					array(
						'handler'		=> 'dizzi-ui-js',
						'file' 			=> $jsPath . ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? 'colorlib-ui.js' : 'colorlib-ui.min.js' ),
						'dependency' 	=> array(),
						'version' 		=> '3.0.0',
						'in_footer' 	=> true
					),
					array(
						'handler'		=> 'dizzi-custom',
						'file' 			=> $jsPath.'custom.js',
						'dependency' 	=> array( 'masonry', 'dizzi-ui-js' ),
						'version' 		=> $this->dizzi_version . '-s2',
						'in_footer' 	=> true
					),

				)
			);

			return $scripts;

		} // end enqueu method 

		// Google Font  
		private function google_font(){
			$font_url = '';

			/*
			 * The families this theme uses are bundled under
			 * assets/fonts/google, so nothing is fetched from Google and
			 * no request leaves the visitor's browser for a third party.
			 *
			 * Translators can still turn the fonts off for scripts these
			 * families do not cover.
			 */
			if ( 'off' !== _x( 'on', 'Google font: on or off', 'dizzi' ) ) {
				$font_url = get_template_directory_uri() . '/assets/css/google-fonts.css';
			}

			return esc_url_raw( $font_url );
		} //End google_font method

		private function customizer_init(){

		
			

			
			// Instantiate dizzi theme customizer
			$dizzi_theme_customizer = new dizzi_theme_customizer();
		}
	} // End Dizzi Class

?>