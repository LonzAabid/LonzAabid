<?php

 $wp_customize->add_section( 'archive-layout', array(
		'title'	   => esc_html__( 'Archive', 'swift' ),
		'priority' => 5,
 ) 
 );

     // --------1-----Arhive-- Layout --------- 


 $wp_customize->add_setting( 'archive-layout', array(
    'defualt' => 'sidebar-right',
    )
 );

 $wp_customize->add_control( new RadioImage( $wp_customize, 'archive-layout', 
    array(
        'type' => 'radio',
        'priority' => 0,
        'section' => 'archive-layout',
        'settings' => 'archive-layout',
        'label' => __(' Select Archive Layout'),
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

     // --------2-----Arhive-- Posts Layout --------- 
 

$wp_customize->add_setting( 'archive-posts-layout', array(
        'defualt' => 'grid'
        ) 
    );

$wp_customize->add_control( new RadioImage( 
    $wp_customize, 'archive-posts-layout', array(
        'section' => 'archive-layout',
        'type' => 'radio',
        'settings' => 'archive-posts-layout',
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




 /**
    -----------------------------------------------------------
                2.
     -----------------------------------------------------------
*/












?>
