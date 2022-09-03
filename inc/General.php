<?php

	/**
	------------------------------------------------------------
	Panel: General
	1. Section: -- Site-Width;
	2. Section: -- Header Settings
	------------------------------------------------------------
	*/
	$wp_customize->add_panel( 'general-panel', array(
		'title'	   => esc_html__( 'General', 'mytheme' ),
		'priority' => 0,
	) );

	/**
	    -- 1 --    Site  Width  ----------
	*/
 $wp_customize->add_section( 'site-width', array(
    'title'   => esc_html__( ' Site Width ', 'swift' ),
	'panel' => 'general-panel',
    'description' => esc_html__('Set your site width | Default is 1280px', 'swift' ),
	'priority'  => 1,

	) );

 $wp_customize->add_setting( 'site-width', array(
    'default'           => '1280',
 ) );

 $wp_customize->add_control( new Range($wp_customize, 'site-width', array(
    'label'   => esc_html__( ' Site Width ( px )', 'swift' ),
    'section' => 'site-width',
	'settings' => 'site-width',
    'type'    => 'range',
	'priority'  => 1,
    'input_attrs' => array(
        'min' => 500,
        'max' => 2000, 
        'step' => 2,
    )
   )
 ) );

	/**
		-------- 2 --      ----------
	*/









// ----------------------------



?>