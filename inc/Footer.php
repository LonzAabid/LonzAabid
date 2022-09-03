<?php


$wp_customize->add_panel('footer-panel', array(
    'title'  => esc_html__('Footer Settings'),
    'description'  =>  esc_html__('Footer Settings'),
    'priority'  =>  9,
      )
);


/**
	------------------------------------------------------------
	SECTION:   Footer Grid
	------------------------------------------------------------
*/





    //  -----   ------  --------------------
    //          Social Links
    //  ------- ------  ----    -   -   --- -

    $wp_customize->add_setting( 'social-links', array(
        'default'           => true,
        'transport'         => 'postMessage',
    ) 
    );
    
    $wp_customize->add_control( new Toggle_Checkbox( $wp_customize, 'social-links', array(
        'label'    	  => esc_html__( 'Footer Social Links','swift'),
        'description' => esc_html__('Toggle On to show', 'swift' ),
        'type'        => 'checkbox',
        'section'  	  => 'social-links',
        'settings' => 'social-links',
    ) ) 
    );
    
$wp_customize->add_section('social-links', array(
    'title'  => esc_html__('Social Links Settings'),
    'description'  =>  esc_html__('Insert Your Social Media links, Such as your Youtube channel link, your Facebook Page or Group Link'),
    'panel' => 'footer-panel'
      )
      );

$wp_customize->add_setting( 'facebook-url', array(
    'transport'         => 'postMessage',
) 
);

$wp_customize->add_control('facebook-url', array(
    'label'    	  => esc_html__( 'Facebook Link','swift'),
    'description' => esc_html__('Enter Proper Url as: https://example.com'),
    'type'        => 'url',
    'section'  	  => 'social-links',
    'settings' => 'facebook-url',
    )
    
  
);

$wp_customize->add_setting( 'youtube-url', array(
    'transport'         => 'postMessage',
) 
);
$wp_customize->add_control('youtube-url', array(
    'label'    	  => esc_html__( 'Youtube Link','swift'),
    'description' => esc_html__('Enter Proper Url as: https://example.com'),
    'type'        => 'url',
    'section'  	  => 'social-links',
    'settings' => 'youtube-url',
 ) 
);

$wp_customize->add_setting( 'telegram-url', array(
    'transport'         => 'postMessage',
) 
);
$wp_customize->add_control('telegram-url', array(
    'label'    	  => esc_html__( 'Telegram Link','swift'),
    'description' => esc_html__('Enter Proper Url as: https://example.com'),
    'type'        => 'url',
    'section'  	  => 'social-links',
    'settings' => 'telegram-url',
 ) 
);

$wp_customize->add_setting( 'instagram-url', array(
    'transport'         => 'postMessage',
) 
);
$wp_customize->add_control('instagram-url', array(
    'label'    	  => esc_html__( 'Instagram Link','swift'),
    'description' => esc_html__('Enter Proper Url as: https://example.com'),
    'type'        => 'url',
    'section'  	  => 'social-links',
    'settings' => 'instagram-url',
 ) 
);


/**
	------------------------------------------------------------
	SECTION: 
	------------------------------------------------------------
*/






