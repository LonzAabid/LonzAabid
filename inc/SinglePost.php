<?php
  /**
	------------------------------------------------------------
	            Contents: Single--Post--Controls---
	------------------------------------------------------------
*/
  $wp_customize->add_section('single-post', array(
    'title' => esc_html__('Single Post'),
    'description' => esc_html__('Single Post Settings And Design'),
    'priority' => 2,
    )
  );
/**
    --------------------------------------------------------------
                1.  Select Layout
                2.  Margin Padding
                2.  Breadcrumb
                3.  Title
                4.  Meta--Author--Category
                5.  Thumbnail
                6.  Table of Contents TOC
                7.  Tags
                9.  Social Share Btns
                10. Realated Posts
               
     --------------------------------------------------------------
*/
 $wp_customize->add_setting( 'single-post-layout', array(
    'defualt' => 'sidebar-right',
    )
 );

 $wp_customize->add_control( new RadioImage( $wp_customize, 'radio-image', 
    array(
        'type' => 'radio',
        'priority' => 0,
        'section' => 'single-post',
        'settings' => 'single-post-layout',
        'label' => __(' Select Layout '),
        'choices' => array(
            'full-width' => array( 
                'url' => get_template_directory_uri(  ).'/assets/images/full-width.png', 
                'label' =>' Full Width' ),
            'sidebar-right' => array( 
                'url' => get_template_directory_uri(  ).'/assets/images/sidebar.png', 
                'label' =>' Sidebar Right' )
                )
            )
        )
    );

/**
    -----------------------------------------------------------
                6.. Margin- Padding ---
     -----------------------------------------------------------
*/
$wp_customize->add_setting( 'post-box-model', array(
    'default'           => 0,
    // 'transport'         => 'postMessage',
) );

$wp_customize->add_control( new BoxModel( 
    $wp_customize, 'post-box-model', array(
    'label'       => esc_html__( 'Page Margin and Padding', 'swift' ),
    'description'       => esc_html__( 'Margin is the space outside content & Padding is the space inside the content.', 'swift' ),
    'priority' => 1,
    'section'     => 'single-post',
    'settings' => 'post-box-model',
    'choices'    => array(
        'margin' => array(
            'margin-top'     => 1,
            'margin-right'   => 1,
            'margin-bottom'  => 0,
            'margin-left'    => 1,
        ),
        'padding' => array(
            'padding-top'    => 2,
            'padding-right'  => 1,
            'padding-bottom' => 1,
            'padding-left'   => 2,
        ),
    )
  ) ) 
 );

 /**
    -----------------------------------------------------------
                2.. Post Breadcrumb---
     -----------------------------------------------------------
*/
 $wp_customize->add_setting( 'meta-breadcrumb',array(
        'default'    => true,
        'transport'  => 'refresh',
    )
 );
 $wp_customize->add_control( new Toggle_Checkbox( 
     $wp_customize,'meta-breadcrumb', array(
        'priority' => 4,
        'section' => 'single-post',
        'settings' => 'meta-breadcrumb',
        'type' => 'checkbox',
        'label' => 'Breadcrumb',
        'description' => 'Click to Show/Hide Breadcrumb, Good for SEO & UX',
        )
    )
 );
  /**
    -----------------------------------------------------------
                3.. Title h1---
     -----------------------------------------------------------
*/


/**
    -----------------------------------------------------------
                4.. Post Breadcrumb---
     -----------------------------------------------------------
*/
$wp_customize->add_setting( 'meta-author-cat',array(
    'default'    => true,
)
);
$wp_customize->add_control( new Toggle_Checkbox( 
 $wp_customize,'meta-author-cat', array(
    'priority' => 8,
    'section' => 'single-post',
    'settings' => 'meta-author-cat',
    'type' => 'checkbox',
    'label' => 'Meta - Author, Category',
    'description' => 'Show/Hide Meta Info, Author, Data & Category',
    )
)
);

 /**
    -----------------------------------------------------------
                5.. Single-post-Thumbnail---
     -----------------------------------------------------------
*/
$wp_customize->add_setting( 'single-post-thumbnail',array(
    'default'    => true,
)
);
$wp_customize->add_control( new Toggle_Checkbox( 
 $wp_customize,'single-post-thumbnail', array(
    'priority' => 10,
    'section' => 'single-post',
    'settings' => 'single-post-thumbnail',
    'type' => 'checkbox',
    'label' => 'Thumbnail',
    'description' => 'Show/Hide Thumbnail Image',
    )
)
);

$wp_customize->add_setting( 'single-post-thumbnail-size', array(
    'default'           => 'medium_large',
) );

$wp_customize->add_control('single-post-thumbnail-size', array(
    'label'    	  => esc_html__( 'Thumbnail Size','swift'),
    'description' => esc_html__('Select Post Thumbnail Size', 'swift' ),
    'priority' => 10,
    'section'  	  => 'single-post',
    'settings' => 'single-post-thumbnail-size',
    'type'    => 'select',
		'choices' => array(
            'medium' => esc_html__( 'Medium - 300px', 'swift' ),
			'medium_large' => esc_html__( 'Medium Large - 768px', 'swift' ),
			'large' => esc_html__( 'Large - 1024px', 'swift' ),
            'full'  => esc_html__('Full - 1280px', 'swift'),
    )
)  
);

/**
	------------------------------------------------------------
	SECTION:    6. Show Table of Contents
	------------------------------------------------------------
*/

 $wp_customize->add_setting( 'toc', array(
    'default'           => true,
 ) 
 );

 $wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'toc', array(
    'label'    	  => esc_html__( 'Table Of Contents','swift'),
    'description' => esc_html__('Toggle On to show TOC on single posts, good for SEO and UX', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'single-post',
    'settings' => 'toc',
    'priority' => 14,
 ) ) 
 );


/**
	------------------------------------------------------------
	SECTION:    7. Show Tags
	------------------------------------------------------------
*/

    $wp_customize->add_setting( 'post-tags', array(
        'default'           => true,
    ) 
    );
    
    $wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'post-tags', array(
        'label'    	  => esc_html__( 'Post Tags','swift'),
        'description' => esc_html__('Toggle On to show', 'swift' ),
        'type'        => 'checkbox',
        'section'  	  => 'single-post',
        'settings' => 'post-tags',
        'priority' => 18,
    ) ) 
    );
    
/**
	------------------------------------------------------------
	SECTION:    8.  Social Share Buttons
	------------------------------------------------------------
	*/

 $wp_customize->add_setting( 'social-share-buttons', array(
        'default'           => true,
    ) 
    );
    
 $wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'social-share-buttons', array(
        'label'    	  => esc_html__( 'Social Share Buttons','swift'),
        'description' => esc_html__('Toggle On to show', 'swift' ),
        'type'        => 'checkbox',
        'section'  	  => 'single-post',
        'settings' => 'social-share-buttons',
        'priority' => 22,
    ) ) 
    );

/**
	------------------------------------------------------------
	SECTION:      9.  Related Posts
	------------------------------------------------------------
*/

$wp_customize->add_setting( 'related-posts', array(
    'default'           => true,
) 
);

$wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'related-posts', array(
    'label'    	  => esc_html__( 'Related Posts','swift'),
    'description' => esc_html__('Toggle On to show', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'single-post',
    'settings' => 'related-posts',
    'priority' => 26,
) ) 
);

 $wp_customize->add_setting( 'related-posts-count', array(
    'default'           => 3,
 ) );

 $wp_customize->add_control('related-posts-count', array(
    'label'    	  => esc_html__( 'Related Posts Count','swift'),
    'description' => esc_html__('Select The Number Of Related Posts', 'swift' ),
    'section'  	  => 'single-post',
    'settings' => 'related-posts-count',
    'priority' => 27,
    'type'    => 'select',
		'choices' => array(
			'2' => esc_html__( '2 Posts', 'swift' ),
			'3' => esc_html__( '3 Posts', 'swift' ),
			'4' => esc_html__( '4 Posts', 'swift' ),
			'5' => esc_html__( '5 Posts', 'swift' ),
			'6' => esc_html__( '6 Posts', 'swift' ),
			'7' => esc_html__( '7 Posts', 'swift' ),
			'8' => esc_html__( '8 Posts', 'swift' ),
    )
 )  
 );

 $wp_customize->add_setting( 'related-posts-thumb', array(
    'default'           => true,
 ) 
 );

 $wp_customize->add_control( new Toggle_Checkbox( 
    $wp_customize, 'related-posts-thumb', array(
    'label'    	  => esc_html__( 'Related Posts Thumbnail','swift'),
    'description' => esc_html__('Toggle On to show', 'swift' ),
    'type'        => 'checkbox',
    'section'  	  => 'single-post',
    'settings' => 'related-posts-thumb',
    'priority' => 28,
 ) ) 
 );

 $wp_customize->add_setting( 'related-posts-thumb-size', array(
    'default'           => 'medium',
 ) );

 $wp_customize->add_control('related-posts-thumb-size', array(
    'label'    	  => esc_html__( 'Related Posts Thumb Size','swift'),
    'description' => esc_html__('Select Thumbnail Size', 'swift' ),
    'priority' => 29,
    'section'  	  => 'single-post',
    'settings' => 'related-posts-thumb-size',
    'type'    => 'select',
		'choices' => array(
			'small' => esc_html__( 'Small - 150px', 'swift' ),
			'medium' => esc_html__( 'Medium - 350px', 'swift' ),
			'large' => esc_html__( 'Large - 720px', 'swift' )
    )
 )  
 );


 










?>


