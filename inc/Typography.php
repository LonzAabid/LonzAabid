<?php 
    //  These Sections are included in General.php which is a Panel
    //  ---Typography Customizer Controls
 
  $wp_customize->add_section('typography', array(
      'title'  => esc_html__('Typography'),
      'description'  =>  esc_html__('Customize your Typography Section'),
      'priority'  =>  7,
      'panel'  => 'general-panel',
      )
  );

    // ----1.--- - Body Font size--------  

 $wp_customize->add_setting('body-font-size', array(
        'default' => 16,
    )
  );
      
 $wp_customize->add_control( new Number_Input ( $wp_customize, 'body-font-size', array(
          'label'       => __( 'Body Font Size'),
          'type'        => 'number',
          'section'     => 'typography',
          'settings'    => 'body-font-size',
          'priority'    => 1,
          'input_attrs'  => array(
            'min' => 10,
            'max' => 40,
            'step' => 1,
          ),
        )
    )
 );


 $wp_customize->add_setting( 'body-font-family', array(
  'default'           => 'opensans',
  ) 
 );

 $wp_customize->add_control('body-font-family', array(
  'label'    	  => esc_html__( 'Font Family','swift'),
  'description' => esc_html__('Select Font Family For Body Text. These fonts are Web Safe Fonts, choose for better Performance and Speed.', 'swift' ),
  'section'  	  => 'typography',
  'settings' => 'body-font-family',
  'priority' => 4,
  'type'    => 'select',
  'choices' => array(
    'roboto'   => esc_html__( 'Roboto', 'swift' ),
    'arial'   => esc_html__( 'Arial', 'swift' ),
    'seogoe_ui'   => esc_html__( 'Seogoe UI', 'swift' ),
    'verdana'   => esc_html__( 'Verdana', 'swift' ),
   )
  )  
 );


     // ------- - Headings Font size--------  


 $wp_customize->add_setting('headings-font-sizes', array(
  'default' => 16,
  )
 );

 $wp_customize->add_control( new Repeater ( $wp_customize, 'headings-font-sizes', array(
    'label'       => __( ' Headings'),
    'description'       => __( ' Set font size for Mobile & Desktop Headings.'),
    'type'        => 'number',
    'section'     => 'typography',
    'settings'    => 'headings-font-sizes',
    'priority'    => 13,
    'input_attrs'  => array(
      'min' => 14,
      'max' => 60,
      'step' => 1,
    ),
    'choices' => array(
        'h1' => 'H1',
        'h2' => 'H2',
        'h3' => 'H3',
        'h4' => 'H4',
        'h5' => 'H5',
        'h6' => 'H6',
     ),
   )
  )
 );
