<?php
namespace Dizzielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
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
 * elementor projects section widget.
 *
 * @since 1.0
 */
class Dizzi_Projects extends Widget_Base {

	public function get_name() {
		return 'dizzi-projects';
	}

	public function get_title() {
		return __( 'Our Projects', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-gallery-grid';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        $this->start_controls_section(
			'section_heading',
			[
				'label' => __( 'Section Heading', 'dizzi' ),
			]
        );
        
        $this->add_control(
            'sub_title',
            [
                'label'         => esc_html__( 'Sub Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => __( 'Portfolio', 'dizzi' )
            ]
        );
        
        $this->add_control(
            'sec_title',
            [
                'label'         => esc_html__( 'Section Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'default'       => __( 'Our Projects', 'dizzi' )
            ]
        );
		$this->end_controls_section(); 


        // ----------------------------------------  Projects Content ------------------------------
        $this->start_controls_section(
            'menu_tab_sec',
            [
                'label' => __( 'Projects', 'dizzi' ),
            ]
        );
		$this->add_control(
			'portfolio_number', [
				'label'         => esc_html__( 'Project Number', 'dizzi' ),
				'type'          => Controls_Manager::NUMBER,
				'max'           => 6,
				'min'           => 2,
				'step'          => 2,
				'default'       => 2

			]
		);

        $this->end_controls_section(); // End projects content

        //------------------------------ Color Settings ------------------------------
        $this->start_controls_section(
            'color_settings', [
                'label' => __( 'Color Settings', 'dizzi' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sub_title_color', [
                'label'     => __( 'Sub Title Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_project .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'sec_big_title_color', [
                'label'     => __( 'Big Title Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_project .section_tittle h2' => 'color: {{VALUE}};',
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
            'anc_color', [
                'label'     => __( 'Anchor Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_project .project_menu_item .active' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_project .project_menu_item ul li:hover' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_project .more_btn_iner' => 'border-color: {{VALUE}}; color: {{VALUE}};',
                    '{{WRAPPER}} .our_project .more_btn_iner:hover' => 'background-color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'project_cat_color', [
                'label'     => __( 'Project Category text Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_project .single_our_project .single_offer .hover_text p' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->end_controls_section();

	}

	protected function render() {
        
    // call load widget script
    $this->load_widget_script();

    $settings       = $this->get_settings();
    $sub_title      = !empty( $settings['sub_title'] ) ? $settings['sub_title'] : '';
    $sec_title      = !empty( $settings['sec_title'] ) ? $settings['sec_title'] : '';
    $pNumber        = $settings['portfolio_number'];
    $icon_2         = DIZZI_DIR_ICON_IMG_URI . 'icon_2.png';
    $dynamic_class  = is_front_page() ? 'our_project section_padding' : 'our_project section_padding single_page_project';
    ?>

    <!-- our_project part start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>" id="portfolio">
      <div class="container">
        <?php            
            //Load Portfolios ==============
            dizzi_portfolio_section( $sub_title, $sec_title, $pNumber );
        ?>
      </div>
      <img src="<?php echo esc_url( $icon_2 )?>" class="animation_icon_2" alt="animation_icon_2">
    </section>
    <!-- our_project part end-->
    <?php

    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            $(window).on('load', function() {
                if (document.getElementById("portfolio")) {
                    var $workGrid = $(".portfolio-grid").isotope({
                        itemSelector: ".all"
                    });
                }

                $(".portfolio-filter ul li").on("click", function() {
                    $(".portfolio-filter ul li").removeClass("active");
                    $(this).addClass("active");

                    var data = $(this).attr("data-filter");
                    $workGrid.isotope({
                        filter: data
                    });
                });
            });
        })(jQuery);
        </script>
        <?php 
        }
    }
}
