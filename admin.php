<?php
include( plugin_dir_path( __FILE__ ) . 'RationalOptionPages.php');

$pages = array(
	'meals-donated'	=> array(
		'page_title'	=> __( 'Meals donated', 'sample-domain' ),
		'sections'		=> array(
			'section-one'	=> array(
				'title'			=> __( 'Meals Donated so far', 'sample-domain' ),
				'fields'		=> array(
					'meals'		=> array(
						'title'			=> __( 'Number of meals', 'sample-domain' ),
					),
				),
			),
		),
	),
);
$option_page = new RationalOptionPages( $pages );