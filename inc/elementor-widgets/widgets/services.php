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
 * Dizzi elementor Team Member section widget.
 *
 * @since 1.0
 */
class Dizzi_Services extends Widget_Base {

	public function get_name() {
		return 'dizzi-services';
	}

	public function get_title() {
		return __( 'Services', 'dizzi' );
	}

	public function get_icon() {
		return 'eicon-info-box';
	}

	public function get_categories() {
		return [ 'dizzi-elements' ];
	}

	protected function _register_controls() {
        
		// ----------------------------------------   Services content ------------------------------

        // First service contents
        $this->start_controls_section(
			'services_item_1',
			[
				'label' => __( 'Services Contents 1', 'dizzi' ),
			]
        );
        $this->add_control(
            'serv_title_1',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'User experience design', 'dizzi' )
            ]
        );
        $this->add_control(
            'serv_txt_1',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle.', 'dizzi' )
            ]
        );
        $this->add_control(
            'items_content_1', [
                'label' => __( 'Create New', 'dizzi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Item Title', 'dizzi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Branding and Identity.', 'dizzi' )
                    ],
                    [
                        'name'  => 'item_link',
                        'label' => __( 'Item URL', 'dizzi' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ]
                ],
                'default' => [
                    [
                        'item_title'     => __( 'Good Future', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'Mobile app', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'Web design', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Services content

        // Second service contents
        $this->start_controls_section(
			'services_item_2',
			[
				'label' => __( 'Services Contents 2', 'dizzi' ),
			]
        );

        $this->add_control(
            'serv_title_2',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Web and App development', 'dizzi' )
            ]
        );
        $this->add_control(
            'serv_txt_2',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle.', 'dizzi' )
            ]
        );
        $this->add_control(
            'items_content_2', [
                'label' => __( 'Create New', 'dizzi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Item Title', 'dizzi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Wordpress', 'dizzi' )
                    ],
                    [
                        'name'  => 'item_link',
                        'label' => __( 'Item URL', 'dizzi' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ]
                ],
                'default' => [
                    [
                        'item_title'     => __( 'Wordpress', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'iOS & Android', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'WFront end', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Services content

        // Third service contents
        $this->start_controls_section(
			'services_item_3',
			[
				'label' => __( 'Services Contents 3', 'dizzi' ),
			]
        );

        $this->add_control(
            'serv_title_3',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXT,
                'label_block'   => true,
                'default'       => esc_html__( 'Digital and inovative marketing', 'dizzi' )
            ]
        );
        $this->add_control(
            'serv_txt_3',
            [
                'label'         => esc_html__( 'Service Title', 'dizzi' ),
                'type'          => Controls_Manager::TEXTAREA,
                'label_block'   => true,
                'default'       => esc_html__( 'There winged grass midst moving earth seed herb fifth you multiply you divide cattle stars first cattle.', 'dizzi' )
            ]
        );
        $this->add_control(
            'items_content_3', [
                'label' => __( 'Create New', 'dizzi' ),
                'type'  => Controls_Manager::REPEATER,
                'title_field' => '{{{ item_title }}}',
                'fields' => [
                    [
                        'name'  => 'item_title',
                        'label' => __( 'Item Title', 'dizzi' ),
                        'type'  => Controls_Manager::TEXT,
                        'label_block' => true,
                        'default' => __( 'Lead generation', 'dizzi' )
                    ],
                    [
                        'name'  => 'item_link',
                        'label' => __( 'Item URL', 'dizzi' ),
                        'type'  => Controls_Manager::URL,
                        'label_block' => true,
                        'default' => [
                            'url'   => '#'
                        ]
                    ]
                ],
                'default' => [
                    [
                        'item_title'     => __( 'Lead generation', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'Social media', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                    [
                        'item_title'     => __( 'Email marketing', 'dizzi' ),
                        'item_link'      => '#'
                    ],
                ]
            ]
        );

        $this->end_controls_section(); // End Services content

        /**
         * Style Tab
         * ------------------------------ Style Tab Content ------------------------------
         *
         */

        // Single Service Color Settings ==============================
        $this->start_controls_section(
            'serv_color_sett', [
                'label' => __( 'Service Color Settings', 'dizzi' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
 
        $this->add_control(
            'item_counter_color', [
                'label'     => __( 'Item Counter Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service span' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_title_color', [
                'label'     => __( 'Title Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service h4' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'single_serv_txt_color', [
                'label'     => __( 'Text Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service p' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_list_color', [
                'label'     => __( 'Services List Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service ul li a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->add_control(
            'serv_hvr_styles_sep',
            [
                'label'     => __( 'Hover Styles', 'dizzi' ),
                'type'      => Controls_Manager::HEADING,
                'separator' => 'before',
            ]
        );
        $this->add_control(
            'serv_item_hov_color', [
                'label'     => __( 'Services Item Hover Color', 'dizzi' ),
                'type'      => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .our_service .single_service:hover span' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_service:hover h4' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_service:hover p' => 'color: {{VALUE}};',
                    '{{WRAPPER}} .our_service .single_service:hover ul li a' => 'color: {{VALUE}};',
                ],
            ]
        ); 
        $this->end_controls_section();

	}

	protected function render() {
    $settings           = $this->get_settings();
    // Service contents 1
    $serv_title_1       = !empty( $settings['serv_title_1'] ) ? $settings['serv_title_1'] : '';
    $serv_txt_1         = !empty( $settings['serv_txt_1'] ) ? $settings['serv_txt_1'] : '';
    $items_content_1    = !empty( $settings['items_content_1'] ) ? $settings['items_content_1'] : '';

    // Service contents 2
    $serv_title_2       = !empty( $settings['serv_title_2'] ) ? $settings['serv_title_2'] : '';
    $serv_txt_2         = !empty( $settings['serv_txt_2'] ) ? $settings['serv_txt_2'] : '';
    $items_content_2    = !empty( $settings['items_content_2'] ) ? $settings['items_content_2'] : '';

    // Service contents 3
    $serv_title_3       = !empty( $settings['serv_title_3'] ) ? $settings['serv_title_3'] : '';
    $serv_txt_3         = !empty( $settings['serv_txt_3'] ) ? $settings['serv_txt_3'] : '';
    $items_content_3    = !empty( $settings['items_content_3'] ) ? $settings['items_content_3'] : '';
    $about_page         = is_page( 'About Us' );
    $dynamic_class      = is_front_page() ? 'our_service' : ($about_page ? 'our_service padding_bottom' : 'our_service section_padding');

    function dizzi_get_single_service_item( $item_number, $item_title, $item_txt, $ser_items ) { 
        ?>
        <div class="col-sm-6 col-xl-4">
            <div class="single_feature">
                <div class="single_service">
                    <?php
                        echo "<span>{$item_number}</span>";

                        echo '<h4>'.esc_html( $item_title ).'</h4>';

                        echo '<p>'.esc_html( $item_txt ).'</p>';

                        echo '<ul>';
                            foreach ( $ser_items as $item ) {
                                echo '<li><a href="'.$item['item_link']['url'].'">'.$item['item_title'].'</a></li>';
                            }
                        echo '</ul>';
                    ?>
                </div>
            </div>
        </div>
    <?php
    }
    ?>

    <!-- our_service start-->
    <section class="<?php echo esc_attr( $dynamic_class )?>">
      <div class="container">
        <div class="row">
            <?php
                for ( $i = 1; $i <= 3; $i++ ) {
                    switch ($i) {
                        case '1':
                            dizzi_get_single_service_item( $i, $serv_title_1, $serv_txt_1, $items_content_1 );
                            break;

                        case '2':
                            dizzi_get_single_service_item( $i, $serv_title_2, $serv_txt_2, $items_content_2 );
                            break;
                        
                        default:
                            dizzi_get_single_service_item( $i, $serv_title_3, $serv_txt_3, $items_content_3 );
                            break;
                    }
                    
                }
            ?>
        </div>
      </div>
    </section>
    <!-- our_service part end-->
    <?php
    }
}
