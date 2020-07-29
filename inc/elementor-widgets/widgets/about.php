<?php
namespace Dizzielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Utils;
use Elementor\Scheme_Color;
use Elementor\Scheme_Typography;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Dizzi elementor section widget.
 *
 * @since 1.0
 */
class Dizzi_About extends Widget_Base {

	public function get_name() {
		return 'dizzi-about';
	}

	public function get_title() {
		return __( 'About', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  About content ------------------------------
		$this->start_controls_section(
			'about_contents',
			[
				'label' => __( 'About Section', 'dizzi' ),
			]
        );
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Section Sub Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'About Us', 'dizzi' )
            ]
        );

        $this->add_control(
            'about_txt',
            [
                'label'         => esc_html__( 'About Text', 'dizzi' ),
                'description'   => esc_html__('Use <br> tag for line break', 'dizzi'),
                'type'          => Controls_Manager::WYSIWYG,
                'label_block'   => true,
                'default'       => __( '<h2>Digital design and development company</h2><p>There winged grass midst moving earth seed herb fifth you\'re multiply, you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.</p>', 'dizzi' )
            ]
        );
        $this->end_controls_section(); // End about content


        // Button content
        $this->start_controls_section(
			'button_content_section',
			[
				'label' => __( 'Button Content', 'dizzi' ),
			]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'explore us', 'dizzi' ),
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'         => esc_html__( 'Button URL', 'dizzi' ),
                'type'          => Controls_Manager::URL,
                'show_external' => false,
                'default'       => [
                        'url'   => '#'
                ]
            ]
        );

        $this->end_controls_section(); // End item content

        // Items content
        $this->start_controls_section(
			'img_content_section',
			[
				'label' => __( 'Right Image', 'dizzi' ),
			]
        );
        $this->add_control(
            'about_img',
            [
                'label'         => esc_html__( 'Upload Image', 'dizzi' ),
                'type'          => Controls_Manager::MEDIA,
                'show_external' => false,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->end_controls_section(); // End item content
        

        /**
         * Style Tab
         * ------------------------------ About Settings ------------------------------
         *
         */


        // Color Settings ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Color Settings', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
		$this->add_control(
			'sub_title_color', [
				'label'     => __( 'Sub Title Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text h5' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'sec_title_col', [
				'label'     => __( 'Title Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text p' => 'color: {{VALUE}};',
				],
			]
		);
		
        $this->end_controls_section();


        // Button Style ==============================
        $this->start_controls_section(
            'btn_styles', [
                'label' => __( 'Button Style', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
			'btn_color', [
				'label'     => __( 'Button Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text .btn_1' => 'color: {{VALUE}};',
				],
			]
		);
        $this->add_control(
			'btn_bg_color', [
				'label'     => __( 'Button BG Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text .btn_1' => 'background-color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
            'btn_hvr_styles_sep',
            [
                'label'     => __( 'Hover Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
			'btn_hvr_color', [
				'label'     => __( 'Button Hover Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text .btn_1:hover' => 'color: {{VALUE}} !important;',
				],
			]
		);
        $this->add_control(
			'btn_hvr_bg_color', [
				'label'     => __( 'Button Hover BG Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .about_part .about_part_text .btn_1:hover' => 'background-color: {{VALUE}};',
				],
			]
        );
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Background Style', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'dizzi' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .about_part',
            ]
        );
        $this->end_controls_section();


	}

	protected function render() {
        $settings       = $this->get_settings();
        $sub_title  = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
        $about_content        = !empty( $settings['about_txt'] ) ? $settings['about_txt'] : '';
        $about_img      = !empty( $settings['about_img']['id'] ) ? wp_get_attachment_image( $settings['about_img']['id'], 'dizzi_about_img_555x600', false, array( 'alt' => 'about right image' ) ) : '';
        $btn_label        = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
        $btn_url        = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
        $dynamic_class  = is_front_page() ? 'about_part section_padding' : 'about_part section_padding';
        ?>

    <!-- about part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
      <div class="container">
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6">
            <div class="about_part_text">
                <?php
                    echo '<h5>'.esc_html( $sub_title ).'</h5>';
                    
                    if ( $about_content ) {
                        echo wp_kses_post( wpautop( $about_content ) );
                    }

                    echo '<a href="'.esc_url( $btn_url ).'" class="btn_1">'.esc_html( $btn_label ).'</a>';
                ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="about_part_img">
                <?php
                    if( $about_img ){
                        echo wp_kses_post( $about_img );
                    }
                ?>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- about part end-->
    <?php

    }

}
