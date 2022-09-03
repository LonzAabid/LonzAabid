<?php 

/**
	    -- --   Sidebar settings  ----------
*/
$wp_customize->add_section( 'sidebar', array(
    'title'   => esc_html__( ' Sidebar ', 'swift' ),
    'description' => esc_html__('Sidebar Customizer', 'swift' ),
    'priority' => 7,
	) );

/**
	    -- --1.    Sidebar Width  ----------
*/
 $wp_customize->add_setting( 'sidebar-width', array(
    'default'         =>  25,
    'transport'       =>  'refresh',
 ) );

 $wp_customize->add_control( new Range($wp_customize, 'sidebar-width', array(
    'label'   => esc_html__( 'Sidebar Width (%)', 'swift' ),
    'description' => 'Set sidebar width in percentage, default width is 25%',
    'priority' => 1,
    'section' => 'sidebar',
	'settings' => 'sidebar-width',
    'type'    => 'range',
    'input_attrs' => array(
        'min' => 5,
        'max' => 50, 
        'step' => 1,
    )
  )
 ) );

   // ----2-- Sidebar Bg- color--  

 $wp_customize->add_setting('sidebar-bg-color', array(
    'default'   => '#f0f4f8',
    'transport' => 'postMessage',
  )
 );
 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'sidebar-bg-color', array(
      'label'       => __( 'Sidebar Background Color'),
      'section'     => 'sidebar',
      'settings'    => 'sidebar-bg-color',
      'priority' => 4,
      )
    )
  );

/**
	-------- 3 --Widgets bg color      ----------
*/

 $wp_customize->add_setting('widgets-bg-color', array(
    'default'   => '#fff',
    'transport' => 'postMessage',
  )
 );
 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'widgets-bg-color', array(
      'label'       => __( 'Widgets Background Color'),
      'section'     => 'sidebar',
      'settings'    => 'widgets-bg-color',
      'priority' => 6,
      )
    )
 );

 /**
	-------- 4 --Widgets Space      ----------
*/

 $wp_customize->add_setting('widgets-space', array(
    'default'   => 16,
  )
 );
 $wp_customize->add_control( new Number_input($wp_customize, 'widgets-space', array(
      'label'       => __( 'Widgets Space'),
      'section'     => 'sidebar',
      'settings'    => 'widgets-space',
      'priority'    => 8,
      'type'        => 'number',
      'input_attrs'  => array(
         'min' => 5,
         'max' => 32,
         'step' => 1,
       ),
      )
      )
 );
 /**
	------------------------------------------------------------
	      5.  Sidebar - Related Posts
	------------------------------------------------------------
*/

 $wp_customize->add_setting( 'sidebar-related-posts', array(
    'default'           => true,
 ) 
 );

 $wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'sidebar-related-posts', array(
    'label'    	  => esc_html__( 'Sidebar Related Posts','swift'),
    'description' => esc_html__('Show/Hide related posts in sidebar', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'sidebar',
    'settings' => 'sidebar-related-posts',
    'priority' => 12,
 ) ) 
 );

 $wp_customize->add_setting( 'sidebar-related-posts-count', array(
    'default'           => 4,
 ) 
 );

 $wp_customize->add_control('sidebar-related-posts-count', array(
    'label'    	  => esc_html__( 'Related Posts Count','swift'),
    'description' => esc_html__('Select The Number Of Related Posts', 'swift' ),
    'section'  	  => 'sidebar',
    'settings' => 'sidebar-related-posts-count',
    'priority' => 14,
    'type'    => 'select',
		'choices' => array(
			'2' => esc_html__( '2 Posts', 'swift' ),
			'3' => esc_html__( '3 Posts', 'swift' ),
			'4' => esc_html__( '4 Posts', 'swift' ),
			'5' => esc_html__( '5 Posts', 'swift' ),
			'6' => esc_html__( '6 Posts', 'swift' ),
			'7' => esc_html__( '7 Posts', 'swift' ),
			'8' => esc_html__( '8 Posts', 'swift' ),
         '9' => esc_html__( '9 Posts', 'swift' ),
			'10' => esc_html__( '10 Posts', 'swift' ),
    )
 )  
 );

 $wp_customize->add_setting( 'sidebar-related-posts-thumb', array(
    'default'           => true,
 ) 
 );

 $wp_customize->add_control( new Toggle_Checkbox( 
    $wp_customize, 'sidebar-related-posts-thumb', array(
    'label'    	  => esc_html__( 'Related Posts Thumbnail','swift'),
    'description' => esc_html__('Toggle On to show', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'sidebar',
    'settings' => 'sidebar-related-posts-thumb',
    'priority' => 16,
 ) ) 
 );

 $wp_customize->add_setting( 'sidebar-related-posts-thumb-size', array(
    'default'           => 'thumbnail',
   ) 
 );

 $wp_customize->add_control('sidebar-related-posts-thumb-size', array(
    'label'    	  => esc_html__( 'Related Posts Thumb Size','swift'),
    'description' => esc_html__('Select Thumbnail Size For Related Posts.', 'swift' ),
    'priority' => 18,
    'section'  	  => 'sidebar',
    'settings' => 'sidebar-related-posts-thumb-size',
    'type'    => 'select',
		'choices' => array(
         'thumbnail' => esc_html__( 'Thumbnail', 'swift' ),
			'small' => esc_html__( 'Small', 'swift' ),
			'medium' => esc_html__( 'Medium', 'swift' ),
    )
 )  
 );

 /**
	-------- 6 --Last Widget Sticky      ----------
*/

$wp_customize->add_setting('last-widget-sticky', array(
    'default'   => true,
  )
 );
 $wp_customize->add_control( new Toggle_Checkbox( 
    $wp_customize, 'last-widget-sticky', array(
    'label'    	  => esc_html__( 'Last Widget Sticky','swift'),
    'description' => esc_html__('Click to make last widget Sticky. You can insert an Ad code in last widget or any other widgets.', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'sidebar',
    'settings' => 'last-widget-sticky',
    'priority' => 22,
 ) ) 
 );