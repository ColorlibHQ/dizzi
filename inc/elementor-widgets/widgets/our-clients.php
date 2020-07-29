<?php
namespace Dizzielementor\Widgets;

use Elementor\Widget_Base;
use Elementor\Controls_Manager;
use Elementor\Scheme_Color;
use Elementor\Utils;
use Elementor\Group_Control_Typography;
use Elementor\Group_Control_Text_Shadow;
use Elementor\Group_Control_Background;



// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Dizzi elementor clients section widget.
 *
 * @since 1.0
 */
class Dizzi_Clients extends Widget_Base {

	public function get_name() {
		return 'dizzi-clients';
	}

	public function get_title() {
		return __( 'Clients', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Clients Section ------------------------------
        $this->start_controls_section(
            'clients_sec',
            [
                'label' => __( 'Our Clients', 'dizzi' ),
            ]
        );
        $this->add_control(
            'clients_content', [
                'label' => __( 'Create New', 'dizzi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ client_name }}}',
                'fields' => [
                    [
                        'name'  => 'client_img',
                        'label' => __( 'Client Image', 'dizzi' ),
                        'type'  => Controls_Manager::MEDIA,
                    ],
                    [
                        'name'  => 'client_name',
                        'label' => __( 'Client Name', 'dizzi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Sawpalo', 'dizzi' )
                    ],
                ],
                'default' => [
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Sawpalo', 'dizzi' ),
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End section top content
        

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Heading Style ==============================
        $this->start_controls_section(
            'color_sect', [
                'label' => __( 'Style Background', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'sec_bg_color', [
                'label'     => __( 'Section BG Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .client_logo' => 'background-color: {{VALUE}} ;',
                ],
            ]
        );
        
        $this->end_controls_section();


	}

	protected function render() {

    // call load widget script
    $this->load_widget_script();
                
    $settings = $this->get_settings();
    $clients = !empty( $settings['clients_content'] ) ? $settings['clients_content'] : '';
    $dynamic_class = is_front_page() ? 'review_part section_padding' : 'review_part section_padding margin_bottom';
    ?>

    <!--::client logo part end::-->
    <section class="client_logo">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="client_logo_slider owl-carousel d-flex justify-content-between">
                        <?php
                        if( is_array( $clients ) && count( $clients ) > 0 ){
                            foreach ( $clients as $client ) {
                                $client_name    = !empty( $client['client_name'] ) ? $client['client_name'] : '';
                                $client_img     = !empty( $client['client_img']['id'] ) ? wp_get_attachment_image( $client['client_img']['id'], 'dizzi_client_logo_120x60', false, array( 'alt' => $client_name ) ) : '';
                                ?>
                                <div class="single_client_logo">
                                    <?php
                                        if( $client_img ){
                                            echo wp_kses_post( $client_img );
                                        }
                                    ?>
                                </div>
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            var client_logo = $(".client_logo_slider");
            if (client_logo.length) {
                client_logo.owlCarousel({
                items: 6,
                loop: true,
                responsive: {
                    0: {
                    items: 3,
                    margin: 15
                    },
                    600: {
                    items: 3,
                    margin: 15
                    },
                    991: {
                    items: 5,
                    margin: 15
                    },
                    1200: {
                    items: 6,
                    margin: 15
                    }
                }
                });
            }
        })(jQuery);
        </script>
        <?php 
        }
    }
}
