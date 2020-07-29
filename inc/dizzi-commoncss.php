<?php
// Block direct access
if( !defined( 'ABSPATH' ) ){
    exit( 'Direct script access denied.' );
} 
/**
 * @Packge     : DIZZI
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 */
 
 
// enqueue css
function dizzi_common_custom_css(){
    
    wp_enqueue_style( 'dizzi-common', get_template_directory_uri().'/assets/css/dynamic.css' );
		$header_bg         		  = esc_url( get_header_image() );
		$header_bg_img 			  = !empty( $header_bg ) ? 'background-image: url('.esc_url( $header_bg ).')' : '';

		$themeColor     		  = dizzi_opt( 'dizzi_theme_color' );
		$themeSecColor     		  = dizzi_opt( 'dizzi_secondary_theme_color' );

		$buttonHoverBgColor       = dizzi_opt( 'dizzi_booking_btn_bg_color' );
		$buttonBorderColor     	  = dizzi_opt( 'dizzi_button_border_color' );
		$hoverColor     	  	  = dizzi_opt( 'dizzi_hover_color');

		$headerTop_bg     		  = dizzi_opt( 'dizzi_top_header_bg_color' );
		$headerTop_col     		  = dizzi_opt( 'dizzi_top_header_color' );

		$headerTopBg      		  = dizzi_opt( 'dizzi_top_header_bg_color');
		$headerBg          		  = dizzi_opt( 'dizzi_header_bg_color') != '#00d089' ? dizzi_opt( 'dizzi_header_bg_color') : $themeColor;
		$menuColor          	  = dizzi_opt( 'dizzi_header_menu_color' );
		$menuHoverColor           = dizzi_opt( 'dizzi_header_menu_hover_color' ) != '#ff5e13' ? dizzi_opt('dizzi_header_menu_hover_color') : $themeColor;
		$dropMenuBgColor          = dizzi_opt( 'dizzi_header_drop_menu_bg_color' ) != '#ff4800' ? dizzi_opt('dizzi_header_drop_menu_bg_color') : $themeColor;
		$dropMenuColor            = dizzi_opt( 'dizzi_header_drop_menu_color' );
		$dropMenuHovColor         = dizzi_opt( 'dizzi_header_drop_menu_hover_color' ) != '#00d089' ? dizzi_opt('dizzi_header_drop_menu_hover_color') : $themeColor;

		$footerwbgColor     	  = dizzi_opt('dizzi_footer_bg_color') != '#1e2528' ? dizzi_opt('dizzi_footer_bg_color') : '';
		$footerwTextColor   	  = dizzi_opt('dizzi_footer_widget_text_color');
		$widgettitlecolor  		  = dizzi_opt('dizzi_footer_widget_title_color');
		$footerwanchorcolor 	  = dizzi_opt('dizzi_footer_widget_anchor_color') != '#999999' ? dizzi_opt('dizzi_footer_widget_anchor_color') : '';
		$footerwanchorhovcolor    = dizzi_opt('dizzi_footer_widget_anchor_hover_color');
		
		$fofbg					  = dizzi_opt('dizzi_fof_bg_color');
		$foftonecolor			  = dizzi_opt('dizzi_fof_textone_color');
		$fofttwocolor			  = dizzi_opt('dizzi_fof_texttwo_color');

		$bannerBtnHeaderSpanColor = $themeColor != '#ff5e13' ? $themeColor : '';
		$footerAncDefColor 		  = $footerwanchorcolor != '#83868c' ? $footerwanchorcolor : $themeColor;
		$footerAncDefHovColor 	  = $footerwanchorhovcolor != '#00d089' ? $footerwanchorhovcolor : $themeColor;

		$customcss ="
			.hero-banner{
				{$header_bg_img}
			}
			
			.sub_menu
			{
				background-color: {$headerTopBg};
			}
			
			.dropdown .dropdown-menu, .dropdown .dropdown-menu .dropdown-item
			{
				background-color: {$dropMenuBgColor};
			}

			.banner_part .banner_text h1 span
			{
				color: {$bannerBtnHeaderSpanColor} !important;
			}

			.main_menu nav .btn_1:hover
			{
				background: {$buttonHoverBgColor};
			}

			.cta_part .cta_part_iner .cta_part_text p, .about_part .about_text h5, .our_latest_work .single_work_demo h5, .blog_part .single-home-blog .card h5:hover, .review_part .slick_right:hover, .review_part .slick_left:hover, .blog_part .single-home-blog .time, .blog_part .single-home-blog li span, .single_single_service span.fa, section.cta_area a.cta_btn:hover, .sub_menu .sub_menu_right_content i, .sub_menu .sub_menu_social_icon a:hover, .banner-breadcrumb .breadcrumb-item a, .banner_part .banner_text h5 span, .service_part .single_service_part i, .about_part .about_text h4, .our_industries .single_industries h3 a:hover, .portfolio_part .card-columns .portfolio_btn, .see_more_project .btn_1:hover, .post_2 .post_text_1 h3:hover, .post_2 .category_post_img .category_btn, .footer-area .copyright_part_text a, .subscribe_area .subscribe_iner .btn_2:hover, .sl-button span:hover, .blog_right_sidebar .widget_dizzi_recent_widget .post_item .media-body h3:hover, .project_details .project_details_widget .single_project_details_widget span, .blog_right_sidebar .widget_dizzi_newsletter .btn_1, .gallery_part .single_gallery_item .single_gallery_item_iner .gallery_item_text p, .banner_part .banner_text h1 span, .catagory_post .single_catagory_post:hover h3, nav.navigation.pagination .next span:hover, .single-post-area .navigation-area h4:hover, .about_part .about_part_text ul li span, .our_service .single_service span, .our_service .btn_3:hover, .experiance_part .about_text_iner .about_text_counter h2, .our_project .project_menu_item ul li:hover, .our_project .project_menu_item .active, .our_project .single_our_project .single_offer .hover_text p, .member_counter .single_member_counter span, .review_part .owl-nav button span:hover, .about_part .about_part_text h5, .our_project .section_tittle p, .our_project .more_btn_iner, .footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover, .review_part .section_tittle p
			{
				color: {$themeColor}
			}			
			.portfolio_part .card-columns .portfolio_btn path{
				fill: {$themeColor}
			}
			.our_latest_work .single_work_demo .btn_3:hover, .team_member_section .single_team_member .single_team_text h3 a:hover, .team_member_section .single_team_member .team_member_social_icon a:hover, .blog_part .single-home-blog .card .card-body a:hover, .pre_icon a:hover, .next_icon a:hover, .banner-breadcrumb > ol > li.breadcrumb-item > a.bread-link:hover, .banner-breadcrumb .breadcrumb-item a:hover, .blog_details a:hover, .blog_right_sidebar .widget_categories ul li:hover, .blog_right_sidebar .widget_categories ul li:hover a, .blog_right_sidebar .widget_categories ul li a:hover, .blog_area a h2:hover, .post_2 .category_post_img .category_btn:hover, .footer-area .social_icon a:hover, .gallery_part .portfolio-filter .active, .our_service .single_offer_text .btn_1:hover{
				color: {$themeColor}!important;
			}

			.review_part .intro_video_bg .video-play-button, .review_part .owl-prev span:after, .review_part .owl-next span:after, .review_part .intro_video_bg .video-play-button:after, .review_part .intro_video_bg .video-play-button:before, .review_part .intro_video_bg .video-play-button:hover:after, .blog_item_img .blog_item_date, .single_sidebar_widget .tagcloud a:hover, .blog_right_sidebar .single_sidebar_widget.widget_dizzi_newsletter .btn, .pre_icon :after, .next_icon :after, section.cta_area, .service_part .single_service_part .line:after, .service_part .single_service_part:hover, .about_part .about_text .btn_2:hover, .section_tittle h2:after, .our_industries .single_industries h3:after, .faq_part .faq_content .active .accordion-header h2:before, .portfolio_part .card-columns .blockquote h2:after, .see_more_project .btn_1, .contact-section .btn_2:hover, .footer-area .single-footer-widget .btn, .banner_part .banner_text .btn_1:hover:before, .banner_part .banner_text .btn_1:hover:after, .about_us .about_us_text .btn_2:hover, .our_service .single_offer_text .btn_1:hover:before, .our_service .single_offer_text .btn_1:hover:after, .blog_right_sidebar .single_sidebar_widget .btn.btn-default.text-uppercase, .main_menu nav .btn_1, .banner_part .banner_text .btn_1, .our_service .btn_3:hover:after, .blog_part .single-home-blog .card .card-body a:hover:after, .form-contact .form-group .btn_1, .contact-section .button-contactForm, .about_part .about_part_text .btn_1, .our_project .more_btn_iner:hover, .cta_part .btn_1, .search-page .backtohome .btn_1, .f0f-content .btn_1
			{
				background: {$themeColor}
			}

			.banner_part:after, .banner_part .banner_text .btn_1:hover, .about_part .about_part_text .btn_1:hover, .our_service .single_service:hover, .creative .creative_part_text a i, .review_part .owl-dots button.owl-dot.active, .cta_part:after, .cta_part .btn_1:hover, .search-page .backtohome .btn_1:hover, .contact-section .button-contactForm:hover, .f0f-content .btn_1:hover
			{
				background: {$themeSecColor};
			}

			.review_part .owl-dots button.owl-dot
			{
				border-color: {$themeSecColor};
			}

			.btn_4, .our_Professional .single_industries_text:hover, .button:not(.wpcf7-submit), .pricing_part .single_pricing_part .pricing_content .btn_2:hover, .comment-form .comment-respond .btn_2:hover{
				border-color: {$themeColor};
				background-color: {$themeColor};
			}
			.btn_4:hover{
				color: {$themeColor}!important;
			}
			.about_us .about_us_text .btn_2:hover, .blog_right_sidebar .widget_search .btn_2{
				border-color: {$themeColor}!important;
			}

			.service_part .single_service_part:hover .single_service_part_iner span
			{
				background: {$themeColor}!important;
			}

			.btn_2:hover,
			.copyright_part .footer-social a:hover
			{
				background: {$hoverColor}!important;
			}

			.blog_part .single-home-blog .card h5:hover
			{
				color: {$hoverColor};
			}

			.about_part .about_img h2:after, .copyright_part .footer-social a, .contact-section .btn_2:hover, .our_project .more_btn_iner
			{
				border-color: {$themeColor}
			}
			
			.sub_header{
				background: {$headerTop_bg}
			}
			.sub_header .sub_header_social_icon a,
			.sub_header .sub_header_social_icon .register_icon
			{
				color: {$headerTop_col}
			}

			.main_menu.menu_fixed
			{
				background: {$headerBg};
			}
			.main_menu .main-menu-item ul li .nav-link
			{
			   color: {$menuColor};
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):hover
			{
			   color: {$menuHoverColor};
			}
			
			.dropdown .dropdown-menu .dropdown-item
			{
			   color: {$dropMenuColor}!important;
			}
			.dropdown .dropdown-menu .dropdown-item:hover
			{
			   color: {$dropMenuHovColor}!important;
			}
			.main_menu .main-menu-item ul li .nav-link:not(.dropdown-item):before
			{
				background: {$headerBg};
			}

			.footer-area {
				background: {$footerwbgColor};
			}

			.footer-area .single-footer-widget p, .footer-area .single-footer-widget p span, .footer-area .widget_dizzi_newsletter .input-group input, .footer-area .copyright_part_text p, .footer-area .footer_2 .social_icon a
			{
				color: {$footerwTextColor}
			}
			.footer-area .widget_dizzi_newsletter .input-group, .footer-area .copyright_part_text {
				border-color: {$footerwTextColor}
			}
			.footer-area .single-footer-widget h4, .footer-area .single_contact_info h3
			{
				color: {$widgettitlecolor}
			}

			.footer-area .copyright_part_text a, .footer-area .social_icon a, .footer-area .single-footer-widget ul li a
			{
			   color: {$footerwanchorcolor};
			}
			.footer-area .copyright_part_text .footer-text > a
			{
			   color: {$footerAncDefColor};
			}


			.footer-area .btn{
				background: {$footerwanchorcolor};
			}
			.footer-area .social_icon a:hover, .footer-area .single-footer-widget ul li a:hover
			{
			   color: {$footerAncDefHovColor};
			}
			.footer-area .copyright_part_text a:hover, .footer-area .footer_2 .social_icon a:hover
			{
			   color: {$footerAncDefHovColor}!important;
			}

			#f0f {
				background-color: {$fofbg};
			}
			.f0f-content .h1 {
				color: {$foftonecolor};
			}
			.f0f-content p {
				color: {$fofttwocolor};
			}

			.comment_form .btn_1.button:hover, .search-page .button.button-contactForm:hover, .f0f-content .button.button-contactForm:hover{
				background: #fff;
			}

        ";
       
    wp_add_inline_style( 'dizzi-common', $customcss );
    
}
add_action( 'wp_enqueue_scripts', 'dizzi_common_custom_css', 50 );