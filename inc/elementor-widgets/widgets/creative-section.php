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
class Dizzi_Creative_Section extends Widget_Base {

	public function get_name() {
		return 'dizzi-creative-section';
	}

	public function get_title() {
		return __( 'Creative Section', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-thumbnails-half';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        
        // ----------------------------------------  Creative Section content ------------------------------
        
        // Image content
        $this->start_controls_section(
			'left_img_section',
			[
				'label' => __( 'Left Image Section', 'dizzi' ),
			]
        );
        $this->add_control(
            'left_img',
            [
                'label'         => esc_html__( 'Upload Image', 'dizzi' ),
                'type'          => Controls_Manager::MEDIA,
                'show_external' => false,
                'default'       => [
                    'url'       => Utils::get_placeholder_image_src(),
                ]
            ]
        );

        $this->end_controls_section(); // End image content

        // Creative content section
		$this->start_controls_section(
			'creative_content_section',
			[
				'label' => __( 'Creative content section', 'dizzi' ),
			]
        );
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'We work hard and think creatively', 'dizzi' )
            ]
        );

        $this->add_control(
            'sec_txt',
            [
                'label'         => esc_html__( 'Creative Section Text', 'dizzi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle.', 'dizzi' )
            ]
        );

        $this->add_control(
            'quote_txt',
            [
                'label'         => esc_html__( 'Quoted Text', 'dizzi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle.', 'dizzi' )
            ]
        );

        $this->add_control(
            'anc_txt',
            [
                'label'         => esc_html__( 'Popup - Anchor Text', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => __( 'See how we work', 'dizzi' )
            ]
        );

        $this->add_control(
            'vid_url',
            [
                'label'         => esc_html__( 'Popup Video URL', 'dizzi' ),
                'type'          => Controls_Manager::URL,
                'label_block'   => true,
                'default'       => [
                    'url'       => 'https://www.youtube.com/watch?v=oKvmG9vASPk'
                ]
            ]
        );
        $this->end_controls_section(); // End about content
        

        /**
         * Style Tab
         * ------------------------------ Creative Section Settings ------------------------------
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
					'{{WRAPPER}} .creative .creative_part_text h2' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'text_color', [
				'label'     => __( 'Text Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .creative .creative_part_text p' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'quoted_txt_color', [
				'label'     => __( 'Quoted Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .creative .creative_part_text span' => 'color: {{VALUE}};',
				],
			]
        );
        $this->add_control(
            'anchor_styles_sep',
            [
                'label'     => __( 'Anchor Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
		$this->add_control(
			'play_btn_bg_color', [
				'label'     => __( 'Play Button BG Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .creative .creative_part_text .popup-youtube i' => 'background-color: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'anc_txt_color', [
				'label'     => __( 'Anchor Text Color', 'dizzi' ),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .creative .creative_part_text .popup-youtube' => 'color: {{VALUE}};',
				],
			]
		);
		
        $this->end_controls_section();


    }
    
	protected function render() {
        $settings       = $this->get_settings();
        $left_img       = !empty( $settings['left_img']['id'] ) ? wp_get_attachment_image( $settings['left_img']['id'], 'dizzi_creative_img_974x774', false, array( 'alt' => 'creative left image' ) ) : '';
        $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
        $sec_txt        = !empty( $settings['sec_txt'] ) ? $settings['sec_txt'] : '';
        $quote_txt      = !empty( $settings['quote_txt'] ) ? $settings['quote_txt'] : '';
        $anc_txt        = !empty( $settings['anc_txt'] ) ? $settings['anc_txt'] : '';
        $vid_url        = !empty( $settings['vid_url']['url'] ) ? $settings['vid_url']['url'] : '';
        $dynamic_class  = is_front_page() ? 'creative padding_bottom' : 'creative padding_bottom';
        ?>

    <!-- creative part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-start">
                <div class="col-md-6 col-xl-6">
                    <div class="creative_img">
                        <?php
                            if( $left_img ){
                                echo wp_kses_post( $left_img );
                            }
                        ?>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="creative_part_text">
                        <?php
                            echo '<h2>'.esc_html( $sec_title ).'</h2>';

                            echo '<p>'.esc_html( $sec_txt ).'</p>';

                            echo '<span>“'.esc_html( $quote_txt ).'</span>';

                            echo '<a href="'.esc_url( $vid_url ).'" class="popup-youtube"><i class="ti-control-play"></i> '.esc_html( $anc_txt ).'</a>';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- creative part end-->
    <?php

    }

}
