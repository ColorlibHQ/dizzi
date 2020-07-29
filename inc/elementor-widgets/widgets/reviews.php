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
 * Dizzi elementor reviews section widget.
 *
 * @since 1.0
 */
class Dizzi_Reviews extends Widget_Base {

	public function get_name() {
		return 'dizzi-reviews';
	}

	public function get_title() {
		return __( 'Testimonials', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-testimonial-carousel';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {

        // ----------------------------------------  Review Section ------------------------------
        $this->start_controls_section(
            'review_heading',
            [
                'label' => __( 'Section Heading', 'dizzi' ),
            ]
        );
        $this->add_control(
            'sub_title',
            [
                'label' => __( 'Sub Title', 'dizzi' ),
                'type'  => Controls_Manager::TEXT,
                'default' => __( 'Testimonials', 'dizzi' )
            ]
        );
        $this->add_control(
            'sec_heading',
            [
                'label' => __( 'Section Title', 'dizzi' ),
                'type'  => Controls_Manager::TEXTAREA,
                'default' => __( 'What our Client say', 'dizzi' )
            ]
        );
        $this->add_control(
            'rev_items_sep',
            [
                'label'         => esc_html__( 'Reviews', 'dizzi' ),
                'type'          => Controls_Manager::HEADING,
                'separator'     => 'after'
            ]
        );
        $this->add_control(
            'reviews_content', [
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
                        'default' => __( 'Danny Jonson', 'dizzi' )
                    ],
                    [
                        'name'      => 'client_desig',
                        'label'     => __( 'Client Designation', 'dizzi' ),
                        'type'      => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default'   => __( 'Creative director at Apple', 'dizzi' )
                    ],
                    [
                        'name'  => 'rev_txt',
                        'label' => __( 'Review Text', 'dizzi' ),
                        'type'  => Controls_Manager::TEXTAREA,
                        'default' => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.', 'dizzi' )
                    ],
                ],
                'default' => [
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Justine Miller', 'dizzi' ),
                        'client_desig'      => __( 'Web developer at Envato', 'dizzi' ),
                        'rev_txt'           => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Danny Jonson', 'dizzi' ),
                        'client_desig'      => __( 'Creative director at Apple', 'dizzi' ),
                        'rev_txt'           => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Justine Miller', 'dizzi' ),
                        'client_desig'      => __( 'Web developer at Envato', 'dizzi' ),
                        'rev_txt'           => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.', 'dizzi' ),
                    ],
                    [
                        'client_img'        => [
                            'url'           => Utils::get_placeholder_image_src(),
                        ],
                        'client_name'       => __( 'Danny Jonson', 'dizzi' ),
                        'client_desig'      => __( 'Creative director at Apple', 'dizzi' ),
                        'rev_txt'           => __( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle was had spirit you\'re thing, night darkness. Which itself stars creature.', 'dizzi' ),
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
                'label' => __( 'Style Review Heading', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'color_sub_ttitle', [
                'label'     => __( 'Section Sub Title Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .section_tittle p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_secttitle', [
                'label'     => __( 'Section Title Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .section_tittle h2' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'single_rev_styles_sep',
            [
                'label'     => __( 'Review Single Item Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'color_rev_name_txt', [
                'label'     => __( 'Reviewer Name Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text .client_info h4' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_des_txt', [
                'label'     => __( 'Reviewer Designation Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text .client_info p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'color_rev_txt', [
                'label'     => __( 'Review Text Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .review_part_text p' => 'color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'nav_rev_styles_sep',
            [
                'label'     => __( 'Review Navigation Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'after',
            ]
        ); 
        $this->add_control(
            'rev_dot_col', [
                'label'     => __( 'Review Dot Border Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .owl-dots button.owl-dot' => 'border-color: {{VALUE}};',
                ],
            ]
        );  
        $this->add_control(
            'rev_dot_active_col', [
                'label'     => __( 'Review Dot Active Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .review_part .owl-dots button.owl-dot.active' => 'background-color: {{VALUE}};',
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
    $sec_heading    = !empty( $settings['sec_heading'] ) ? $settings['sec_heading'] : '';
    $reviews        = !empty( $settings['reviews_content'] ) ? $settings['reviews_content'] : '';
    $icon_3         = DIZZI_DIR_ICON_IMG_URI . 'icon_3.png';
    $dynamic_class  = is_front_page() ? 'review_part padding_bottom' : 'review_part padding_bottom';
    ?>

    <!--::review_part end::-->
    <div class="<?php echo esc_attr( $dynamic_class )?>" id="testimonial">
      <div class="container">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-7">
            <div class="section_tittle text-center">
              <p><?php echo esc_html( $sub_title )?></p>
              <h2><?php echo esc_html( $sec_heading )?></h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="review_part_text owl-carousel">
                <?php
                if( is_array( $reviews ) && count( $reviews ) > 0 ){
                    foreach ( $reviews as $review ) {
                        $client_img     = !empty( $review['client_img']['id'] ) ? wp_get_attachment_image( $review['client_img']['id'], 'dizzi_client_img_90x90', false, array( 'alt' => 'client image' ) ) : '';
                        $client_name    = !empty( $review['client_name'] ) ? $review['client_name'] : '';
                        $client_desig   = !empty( $review['client_desig'] ) ? $review['client_desig'] : '';
                        $rev_txt        = !empty( $review['rev_txt'] ) ? $review['rev_txt'] : '';
                        ?>
                        <div class="singler_eview_part">
                            <div class="client_info">
                                <?php
                                    if( $client_img ){
                                        echo wp_kses_post( $client_img );
                                    }

                                    echo '<h4>'.esc_html( $client_name ).'</h4>';

                                    if( $client_desig ){
                                        echo '<p>'.esc_html( $client_desig ).'</p>';
                                    }
                                ?>
                            </div>
                            <?php
                                if( $rev_txt ){
                                    echo '<p>'.esc_html( $rev_txt ).'</p>';
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
      <img src="<?php echo esc_url( $icon_3 )?>" class="animation_icon_3" alt="animation_icon_3">
    </div>
    <!--::review_part end::-->
    <?php
    }

    public function load_widget_script(){
        if( \Elementor\Plugin::$instance->editor->is_edit_mode() === true  ) {
        ?>
        <script>
        ( function( $ ){
            var review = $(".review_part_text");
            if (review.length) {
            review.owlCarousel({
                items: 2,
                loop: true,
                dots: true,
                autoplay: true,
                margin: 40,
                autoplayHoverPause: true,
                autoplayTimeout: 5000,
                nav: false,
                responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 2
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
