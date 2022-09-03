<?php
    // 1 site bg color
    // 2 Content bg color

    $wp_customize->add_section('site-colors', array(
      'title'  => esc_html__('Site Colors'),
      'description'  =>  esc_html__('Set Site Colors'),
      'panel'        => 'general-panel',
      'priority'  =>  4,
      )
    );
      
    // ----1-- Site- Background- color--  

  $wp_customize->add_setting('site-bg-color', array(
        'default'    =>  '#f0f4f8',
        'transport'  =>  'postMessage',
      )
    );
  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'site-bg-color', array(
          'label'       => __( 'Site Background Color'),
          'section'     => 'site-colors',
          'settings'    => 'site-bg-color',
          )
        )
      );

    // -----2- Content- Background- color--  

  $wp_customize->add_setting('content-bg-color', array(
        'default'    =>  '#fff',
        'transport'  =>  'postMessage',

      )
    );

  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'content-bg-color', array(
          'label'       => __( 'Content Background Color'),
          'section'     => 'site-colors',
          'settings'    => 'content-bg-color',
          )
        )
      );

    // -----3- Link - color--  

  $wp_customize->add_setting('link-color', array(
      'default'    =>  '#0a33ec',
      'transport'  =>  'postMessage',
    )
  );

  $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'link-color', array(
        'label'       => __( 'Link Color'),
        'section'     => 'site-colors',
        'settings'    => 'link-color',
        )
      )
    );

    // -----4- link-visited- color--  

  $wp_customize->add_setting('link-visited-color', array(
      'default' => '#143ceee4',
    )
  );

 $wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'link-visited-color', array(
        'label'       => __( 'Link Visited Color'),
        'section'     => 'site-colors',
        'settings'    => 'link-visited-color',
        )
      )
    );

    // -----5- Link Hover- color--  

  $wp_customize->add_setting('link-hover-color', array(
      'default' => '#f75a0c',
    )
  );

$wp_customize->add_control( new Alpha_Color_Control( $wp_customize, 'link-hover-color', array(
        'label'       => __( 'Link Hover Color'),
        'section'     => 'site-colors',
        'settings'    => 'link-hover-color',
        )
      )
    );




?>