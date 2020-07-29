<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <!-- For Resposive Device -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php 
            echo dizzi_site_icon();
            wp_head(); 
        ?>
    </head>
    <body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <?php
                            echo dizzi_theme_logo( 'navbar-brand' );
                        ?>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <?php
                            if(has_nav_menu('primary-menu')) {
                                wp_nav_menu(array(
                                    'menu'           => 'primary-menu',
                                    'theme_location' => 'primary-menu',
                                    'menu_id'        => 'menu-main-menu',
                                    'container_class'=> 'collapse navbar-collapse main-menu-item justify-content-center',
                                    'container_id'   => 'navbarSupportedContent',
                                    'menu_class'     => 'navbar-nav align-items-center',
                                    'walker'         => new dizzi_bootstrap_navwalker,
                                    'depth'          => 3
                                ));
                            }

                            // Social links
                            $social_opt = dizzi_opt('dizzi_social_profile_toggle');
                            if ( $social_opt == true ) {
                                $social_items = dizzi_opt('dizzi_header_social');
                                if( is_array( $social_items ) && count( $social_items ) > 0 ){
                                    echo '<div class="social_icon d-none d-lg-block">';
                                        foreach ($social_items as $value) {
                                            echo '<a href="'. $value['social_url'] .'"><i class="'. $value['social_icon'] .'"></i></a>';
                                        }
                                    echo '</div>';
                                }          
                            }   
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- Header part end-->

    <?php
    //Page Title Bar
    if( function_exists( 'dizzi_page_titlebar' ) ){
	    dizzi_page_titlebar();
    }

