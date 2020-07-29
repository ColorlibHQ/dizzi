<?php
function dizzi_portfolio_metabox( $meta_boxes ) {

	$dizzi_prefix = '_dizzi_';
	$meta_boxes[] = array(
		'id'        => 'portfolio_single_metaboxs',
		'title'     => esc_html__( 'Portfolio Single Metabox', 'dizzi' ),
		'post_types'=> array( 'portfolio' ),
		'context'   => 'side',
		'priority'  => 'high',
		'autosave'  => 'false',
		'fields'    => array(
			array(
				'id'         => $dizzi_prefix . 'project_start_time',
				'name'       => esc_html__( 'Project Start Time', 'dizzi' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $dizzi_prefix . 'project_start_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project Start Date', 'dizzi' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'         => $dizzi_prefix . 'project_end_time',
				'name'       => esc_html__( 'Project End Time', 'dizzi' ),
				'type'       => 'time',
				'js_options' => array(
					'stepMinute'      => 10,
					'controlType'     => 'select'
				),
			),
			array(
				'id'    => $dizzi_prefix . 'project_end_date',
				'type'  => 'date',
				'name'  => esc_html__( 'Project End Date', 'dizzi' ),
				'js_options' => array(
					'dateFormat'      => 'DD, M dd, yy   ',
					'showButtonPanel' => false,
				),
			),
			array(
				'id'    => $dizzi_prefix . 'project_location',
				'type'  => 'text',
				'name'  => esc_html__( 'Project Location', 'dizzi' ),
				'placeholder' => esc_html__( 'Project Location', 'dizzi' ),
			),
			array(
				'id'    			=> $dizzi_prefix . 'project_iner_img',
				'type'  			=> 'image_advanced',
				'multiple'			=> true,
				'max_file_uploads'	=> 2,
				'max_file_size'		=> '500kb',
				'image_size'       	=> 'dizzi_project_single_img_750x500',
				'name'  			=> esc_html__( 'Project Iner Image', 'dizzi' ),
				'placeholder' 		=> esc_html__( 'Project Iner Image', 'dizzi' ),
			),
			array(
				'id'    => $dizzi_prefix . 'client_brief',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Client Brief', 'dizzi' ),
				'placeholder' => esc_html__( 'Client Brief', 'dizzi' ),
			),
			array(
				'id'    => $dizzi_prefix . 'working_process',
				'type'  => 'textarea',
				'name'  => esc_html__( 'Working Process', 'dizzi' ),
				'placeholder' => esc_html__( 'Working Process', 'dizzi' ),
			),
		),
	);


	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'dizzi_portfolio_metabox' );