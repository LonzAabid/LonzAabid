<?php 
    //  These Sections are included in General.php which is a Panel
    //  Header Customizer Controls
 
  $wp_customize->add_section('header-section', array(
      'title'  => esc_html__('Header Section'),
      'description'  =>  esc_html__('Customize your Header Section'),
      'priority'  =>  3,
      'panel'  => 'general-panel',
      )
  );
    
  //  -------  1.  Header Bg Color ------------

  $wp_customize->add_setting('header-bg-color', array(
        'default'     => '#fff',
        'transport'   => 'postMessage',
      )
  );
        
  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'header-bg-color', array(
          'label'       => __( 'Header Background Color: '),
          'section'     => 'header-section',
          'settings'    => 'header-bg-color',
          'priority'    => 1,
          )
        )
  );

      // ----2.------ Menu- itmes- color---------  

  $wp_customize->add_setting('menu-items-color', array(
        'default' => '#0d0e0e',
        'transport'   => 'postMessage',
        )
    );
  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'menu-items-color', array(
          'label'       => __( 'Menu Items Color'),
          'section'     => 'header-section',
          'settings'    => 'menu-items-color',
          'priority'    => 2,
          )
        )
      );

  // ----3.--- Menu- font size--------  

  $wp_customize->add_setting('menu-font-size', array(
    'default' => 16,
  )
  );
  
  $wp_customize->add_control( new Number_Input ( $wp_customize, 'menu-font-size', array(
      'label'       => __( 'Menu Font Size'),
      'type'        => 'number',
      'section'     => 'header-section',
      'settings'    => 'menu-font-size',
      'priority'    => 3,
      'input_attrs'  => array(
        'min' => 10,
        'max' => 32,
        'step' => 1,
      ),
      )
    )
  );
  // ----3.--- Menu- itmes-hover color--------  

 $wp_customize->add_setting('menu-items-hover-color', array(
    'default' => '#fb7304',
  )
  );
  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'menu-items-hover-color', array(
      'label'       => __( 'Menu Hover Color'),
      'section'     => 'header-section',
      'settings'    => 'menu-items-hover-color',
      'priority'    => 3,
      )
    )
  );

    
  //  ------- 4.  Submenu Bg Color ------------

 $wp_customize->add_setting('submenu-bg-color', array(
    'default' => '#fdffff',
    'transport'   => 'postMessage',
  )
);
    
 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'submenu-bg-color', array(
      'label'       => __( 'SubMenu Background Color: '),
      'section'     => 'header-section',
      'settings'    => 'submenu-bg-color',
      'priority'    => 4,
      )
    )
);

  //  ------- 5.  Submenu Items Color ------------

 $wp_customize->add_setting('submenu-items-color', array(
    'default' => '#0d0e0e',
  )
 );
    
 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'submenu-items-color', array(
      'label'       => __( 'SubMenu Items Color: '),
      'section'     => 'header-section',
      'settings'    => 'submenu-items-color',
      'priority'    => 5,
      )
    )
);

 // ----6.--- SubMenu- font size--------  

 $wp_customize->add_setting('submenu-icon-opacity', array(
  'default' => 0.7,
  )
 );
 $wp_customize->add_control( new Number_Input ( $wp_customize, 'submenu-icon-opacity', array(
    'label'       => __( 'SubMenu Icon Opacity'),
    'type'        => 'number',
    'section'     => 'header-section',
    'settings'    => 'submenu-icon-opacity',
    'priority'    => 6,
    'input_attrs'  => array(
      'min' =>  0,
      'max' =>  1,
      'step' => 0.1,
    ),
    )
  )
 );

  //  ------- 6.  Before Header ------------

 $wp_customize->add_setting( 'before-header',array(
    'default'    => false,
 )
 );
 $wp_customize->add_control( new Toggle_Checkbox( 
 $wp_customize,'before-header', array(
    'priority' => 11,
    'section' => 'header-section',
    'settings' => 'before-header',
    'type' => 'checkbox',
    'label' => 'Before Header Widgets',
    'description' => 'Toggle on to show before header widgets and content.',
    )
  )
 );
  //  ------- 7.  before header color ------------

 $wp_customize->add_setting('before-header-bg-color', array(
    'default' => '#fff',
  )
 );
    
 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'before-header-color', array(
      'label'       => __( 'Before Header Bg Color: '),
      'section'     => 'header-section',
      'settings'    => 'before-header-bg-color',
      'priority'    => 7,
      )
    )
);