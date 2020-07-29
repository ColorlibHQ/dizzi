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
class Dizzi_CTA_Content extends Widget_Base {

	public function get_name() {
		return 'dizzi-cta-content';
	}

	public function get_title() {
		return __( 'CTA content', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-right';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        
		// ----------------------------------------  CTA content ------------------------------
		$this->start_controls_section(
			'cta_content',
			[
				'label' => __( 'Our Experience Section', 'dizzi' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'Let’s create something awesome together', 'dizzi' )
            ]
        );
        $this->add_control(
            'btn_label',
            [
                'label'         => esc_html__( 'Button Label', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'  => true,
                'default'       => __( 'Discuss project', 'dizzi' )
            ]
        );
        $this->add_control(
            'btn_url',
            [
                'label'         => esc_html__( 'Button URL', 'dizzi' ),
                'type'          => Controls_Manager::URL,
                'label_block'  => true,
                'default'       => [
                    'url'       => '#'
                ]
            ]
        );
        $this->end_controls_section(); // End experience content
        

        /**
         * Style Tab
         * ------------------------------ Our Experience Settings ------------------------------
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
			'sec_title_color', [
				'label'     => __( 'Section Title Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cta_part h1' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
            'btn_styles_sep',
            [
                'label'     => __( 'Button Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
		$this->add_control(
            'btn_bg_color', [
                'label'     => __( 'Button BG Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .btn_1' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_txt_color', [
                'label'     => __( 'Button Text Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .btn_1' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_bg_color', [
                'label'     => __( 'Button Hover BG Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .btn_1:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'btn_hover_txt_color', [
                'label'     => __( 'Button Hover Text Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part .btn_1:hover' => 'color: {{VALUE}} !important;',
                ],
            ]
        );
        $this->end_controls_section();

        // Background Style ==============================
        $this->start_controls_section(
            'section_bg', [
                'label' => __( 'Style Background', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_bg_img_sep',
            [
                'label'     => __( 'Section Background', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_group_control(
            Group_Control_Background::get_type(),
            [
                'name' => 'sectionbg',
                'label' => __( 'Background', 'dizzi' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .cta_part',
            ]
        );
        $this->add_control(
            'sec_bg_overlay_sep',
            [
                'label'     => __( 'Section Overlay', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'sec_bg_overlay', [
                'label'     => __( 'Section BG Overlay Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .cta_part:after' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        $settings   = $this->get_settings();
        $sec_title  = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $btn_label  = !empty( $settings['btn_label'] ) ? $settings['btn_label'] : '';
        $btn_url    = !empty( $settings['btn_url']['url'] ) ? $settings['btn_url']['url'] : '';
        ?>


    <!--::cta_part start::-->
    <div class="cta_part">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="cta_iner">
              <h1><?php echo esc_html( $sec_title )?></h1>
              <a href="<?php echo esc_url( $btn_url )?>" class="btn_1"><?php echo esc_html( $btn_label )?></a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--::cta_part end::-->
    <?php

    }

}
