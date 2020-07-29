<?php 
/**
 * @Packge     : Dizzi
 * @Version    : 1.0
 * @Author     : Colorlib
 * @Author URI : http://colorlib.com/wp/
 *
 * Customizer section fields
 *
 */

/***********************************
 * General Section Fields
 ***********************************/

 // Theme color field
Epsilon_Customizer::add_field(
    'dizzi_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Theme Color', 'dizzi' ),
        'description' => esc_html__( 'Select the theme color.', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_general_section',
        'default'     => '#00d089',
    )
);

 // Secondary Theme color field
Epsilon_Customizer::add_field(
    'dizzi_secondary_theme_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Secondary Theme Color', 'dizzi' ),
        'description' => esc_html__( 'Select the secondary theme color.', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_general_section',
        'default'     => '#0042ff',
    )
);

// Social Profile section
Epsilon_Customizer::add_field(
    'social_pro_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Social Profile Section', 'dizzi' ),
        'section'     => 'dizzi_header_section',
        'default'     => true,

    )
);

// Social Profile Show/Hide
Epsilon_Customizer::add_field(
    'dizzi_social_profile_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Social Profile Show/Hide', 'dizzi' ),
        'section'     => 'dizzi_header_section',
        'default'     => true,
    )
);

//Social Profile links
Epsilon_Customizer::add_field(
	'dizzi_header_social',
	array(
		'type'         => 'epsilon-repeater',
		'section'      => 'dizzi_header_section',
		'label'        => esc_html__( 'Social Profile Links', 'dizzi' ),
        'button_label' => esc_html__( 'Add new social link', 'dizzi' ),
		'row_label'    => array(
			'type'  => 'field',
			'field' => 'social_link_title',
		),
		'default'      => [
            [
                'social_link_title' => esc_html__( 'Facebook', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-facebook',
            ],
            [
                'social_link_title' => esc_html__( 'Twitter', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-twitter',
            ],
            [
                'social_link_title' => esc_html__( 'Instagram', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-instagram',
            ],
            [
                'social_link_title' => esc_html__( 'Behance', 'beko' ),
                'social_url'  => '#',
                'social_icon'  => 'fa fa-behance',
            ],
        ],
		'fields'       => array(
			'social_link_title'       => array(
				'label'             => esc_html__( 'Title', 'beko' ),
				'type'              => 'text',
				'sanitize_callback' => 'wp_kses_post',
				'default'           => 'Twitter',
			),
			'social_url' => array(
				'label'             => esc_html__( 'Social URL', 'beko' ),
				'type'              => 'text',
				'sanitize_callback' => 'sanitize_text_field',
				'default'           => '#',
			),
			'social_icon'        => array(
				'label'   => esc_html__( 'Icon', 'beko' ),
				'type'    => 'epsilon-icon-picker',
				'default' => 'fa fa-twitter',
			),
			
		),
	)
);

// Header color sections
Epsilon_Customizer::add_field(
    'header_color_section',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Header Color Section', 'dizzi' ),
        'section'     => 'dizzi_header_section',

    )
);
 
// Header background color field
Epsilon_Customizer::add_field(
    'dizzi_header_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Sticky Header BG Color', 'dizzi' ),
        'description' => esc_html__( 'Select the header background color.', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#00d089',
    )
);

// Header nav menu color field
Epsilon_Customizer::add_field(
    'dizzi_header_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#ffffff',
    )
);

// Header nav menu hover color field
Epsilon_Customizer::add_field(
    'dizzi_header_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Header menu hover color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#ffffff',
    )
);

// Header dropdown menu bg color field
Epsilon_Customizer::add_field(
    'dizzi_header_drop_menu_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu BG color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#fafafa',
    )
);

// Header dropdown menu color field
Epsilon_Customizer::add_field(
    'dizzi_header_drop_menu_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#000000',
    )
);

// Header dropdown menu hover color field
Epsilon_Customizer::add_field(
    'dizzi_header_drop_menu_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Dropdown menu hover color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_header_section',
        'default'     => '#00d089',
    )
);

/***********************************
 * Blog Section Fields
 ***********************************/
 
// Post excerpt length field
Epsilon_Customizer::add_field(
    'dizzi_excerpt_length',
    array(
        'type'        => 'text',
        'label'       => esc_html__( 'Set post excerpt length', 'dizzi' ),
        'description' => esc_html__( 'Set post excerpt length.', 'dizzi' ),
        'section'     => 'dizzi_blog_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'     => '30',
    )
);

// Blog single page social share icon
Epsilon_Customizer::add_field(
    'dizzi_blog_meta',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog page post meta show/hide', 'dizzi' ),
        'section'     => 'dizzi_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'dizzi_like_btn',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Like Button show/hide', 'dizzi' ),
        'section'     => 'dizzi_blog_section',
        'default'     => true
    )
);
Epsilon_Customizer::add_field(
    'dizzi_blog_share',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Blog Single Page Share show/hide', 'dizzi' ),
        'section'     => 'dizzi_blog_section',
        'default'     => true
    )
);

/***********************************
 * 404 Page Section Fields
 ***********************************/

// 404 text #1 field
Epsilon_Customizer::add_field(
    'dizzi_fof_titleone',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #1', 'dizzi' ),
        'section'           => 'dizzi_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #2 field
Epsilon_Customizer::add_field(
    'dizzi_fof_titletwo',
    array(
        'type'              => 'text',
        'label'             => esc_html__( '404 Text #2', 'dizzi' ),
        'section'           => 'dizzi_fof_section',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => 'Say Hello.'
    )
);
// 404 text #1 color field
Epsilon_Customizer::add_field(
    'dizzi_fof_textone_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #1 Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_fof_section',
        'default'     => '#000000',
    )
);
// 404 text #2 color field
Epsilon_Customizer::add_field(
    'dizzi_fof_texttwo_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Text #2 Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_fof_section',
        'default'     => '#656565',
    )
);
// 404 background color field
Epsilon_Customizer::add_field(
    'dizzi_fof_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( '404 Page Background Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_fof_section',
        'default'     => '#fff',
    )
);

/***********************************
 * Footer Section Fields
 ***********************************/

// Footer Widget section
Epsilon_Customizer::add_field(
    'footer_widget_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Widget Section', 'dizzi' ),
        'section'     => 'dizzi_footer_section',

    )
);

// Footer widget toggle field
Epsilon_Customizer::add_field(
    'dizzi_footer_widget_toggle',
    array(
        'type'        => 'epsilon-toggle',
        'label'       => esc_html__( 'Footer widget show/hide', 'dizzi' ),
        'description' => esc_html__( 'Toggle to display footer widgets.', 'dizzi' ),
        'section'     => 'dizzi_footer_section',
        'default'     => true,
    )
);

// Footer Copyright section
Epsilon_Customizer::add_field(
    'dizzi_footer_copyright_separator',
    array(
        'type'        => 'epsilon-separator',
        'label'       => esc_html__( 'Footer Copyright Section', 'dizzi' ),
        'section'     => 'dizzi_footer_section',
        'default'     => true,

    )
);

// Footer copyright text field
// Copy right text
$url = 'https://colorlib.com/';
$copyText = sprintf( __( 'Theme by %s colorlib %s Copyright &copy; %s  |  All rights reserved.', 'dizzi' ), '<a target="_blank" href="' . esc_url( $url ) . '">', '</a>', date( 'Y' ) );
Epsilon_Customizer::add_field(
    'dizzi_footer_copyright_text',
    array(
        'type'        => 'epsilon-text-editor',
        'label'       => esc_html__( 'Footer copyright text', 'dizzi' ),
        'section'     => 'dizzi_footer_section',
        'default'     => wp_kses_post( $copyText ),
    )
);

// Footer widget background color field
Epsilon_Customizer::add_field(
    'dizzi_footer_bg_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Background Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_footer_section',
        'default'     => '#ffffff',
    )
);

// Footer widget text color field
Epsilon_Customizer::add_field(
    'dizzi_footer_widget_text_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Text Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_footer_section',
        'default'     => '#83868c',
    )
);

// Footer widget title color field
Epsilon_Customizer::add_field(
    'dizzi_footer_widget_title_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Widget Title Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_footer_section',
        'default'     => '#000000',
    )
);

// Footer widget anchor color field
Epsilon_Customizer::add_field(
    'dizzi_footer_widget_anchor_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_footer_section',
        'default'     => '#83868c',
    )
);

// Footer widget anchor hover color field
Epsilon_Customizer::add_field(
    'dizzi_footer_widget_anchor_hover_color',
    array(
        'type'        => 'epsilon-color-picker',
        'label'       => esc_html__( 'Footer Anchor Hover Color', 'dizzi' ),
        'sanitize_callback' => 'sanitize_text_field',
        'section'     => 'dizzi_footer_section',
        'default'     => '#00d089',
    )
);

