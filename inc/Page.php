<?php

    // Panel for Blog Page, Page , Home
    // ----
 $wp_customize->add_panel('page', array(
     'title'       => esc_html__( 'Page Settings', 'swift' ),
     'priority'    => 3,
 ));


// ----Section------- 1. Blog Page -------

 $wp_customize->add_section('blog-page', array(
    'title'            =>  esc_html__( 'Blog Page', 'swift' ),
    'description'      =>  esc_html__( 'Blog Page Settings, make sure to set your blog page in Admin settings.', 'swift' ),
    'panel'          => 'page',
    'priority'         => 0,
 ));

 
     // --------1.1-----Arhive-- Layout --------- 


  $wp_customize->add_setting( 'blog-layout', array(
        'defualt' => 'sidebar-right',
        )
  );
    
  $wp_customize->add_control( new RadioImage( $wp_customize, 'blog-layout', 
        array(
            'type' => 'radio',
            'priority' => 0,
            'section' => 'blog-page',
            'settings' => 'blog-layout',
            'label' => __(' Select Blog Layout'),
            'priority' => 2,
            'choices' => array(
                'full-width' => array( 
                    'url' => get_template_directory_uri(  ).'/assets/images/full-width.png', 
                    'label' =>' Full Width' ),
                'sidebar-right' => array( 
                    'url' => get_template_directory_uri(  ).'/assets/images/sidebar.png', 
                    'label' =>' Sidebar Right' ),
                    )
                )
            )
  );
    
         // --------1.2-----Arhive-- Posts Layout --------- 
     
  $wp_customize->add_setting( 'blog-posts-layout', array(
            'defualt' => 'grid'
    ) 
  );
    
  $wp_customize->add_control( new RadioImage( 
        $wp_customize, 'blog-posts-layout', array(
            'section' => 'blog-page',
            'type' => 'radio',
            'settings' => 'blog-posts-layout',
            'label' => __(' Choose Posts Layout '),
            'priority' => 4,
            'choices' => array(
                'grid' => array( 
                    'url' => get_template_directory_uri(  ).'/assets/images/grid.png', 
                    'label' =>' Grid' ),
                'list' => array( 
                    'url' => get_template_directory_uri(  ).'/assets/images/list.png', 
                    'label' =>' List' )
            )
        )
    )
 );
    

// ----Section---- 2. Home Page -------

 $wp_customize->add_section('home-page', array(
    'title'            =>  'Home Page',
    'description'      =>  'Home Page Settings, make sure to set your Home page in Admin settings.',
    'panel'          => 'page',
    'priority'         => 2,
 ));

