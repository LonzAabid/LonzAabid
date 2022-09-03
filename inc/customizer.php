<?php
/**
 * Swift Blog Theme Customizer
 *
 *  Responsive_Blog
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 *  WP_Customize_Manager $wp_customize Theme Customizer object.
 */
add_action('customize_register', 'swift_register_customizer');

  
function swift_register_customizer($wp_customize)
{ 
    $dir = get_template_directory() . '/inc/';
	  $dir2 = get_template_directory_uri(  );

    require $dir. '/Custom-Controls/BoxModel.php';
    require $dir. '/Custom-Controls/RadioImage.php';
    require $dir. '/Custom-Controls/Toggle_Checkbox.php';
    require $dir. '/Custom-Controls/Range.php';
    require $dir. '/Custom-Controls/Number_Input.php';
    require $dir. '/Custom-Controls/Repeater.php';
    require $dir. '/Custom-Controls/Alpha_Color.php';






  require $dir.   '/Header.php' ;
  require $dir.   '/Color.php' ;
  require $dir.   '/SinglePost.php';
  require $dir.   '/Footer.php';
  require $dir.   '/Archive.php';
  require $dir.   '/Page.php';
  require $dir.   '/Sidebar.php';
  require $dir.   '/General.php';
  require $dir.   '/Typography.php';


      
// Add postMessage support for site title and description.


 $wp_customize->get_setting( 'blogname' )->transport            = 'postMessage';
 $wp_customize->get_setting( 'blogdescription' )->transport     = 'postMessage';

// Selective refreshes.
$wp_customize->selective_refresh->add_partial( 'blogname', array(
  'selector'        => '.site-title',
  'render_callback' => function() {
    return get_bloginfo( 'name', 'display' );
  },
) );

$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
  'selector'        => '.site-description',
  'render_callback' => function() {
    return get_bloginfo( 'description', 'display' );
  },
) );


/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function customizer_live_preview_js() {
	wp_enqueue_script( 'live-preview-js', get_template_directory_uri() . '/inc/js/live-preview.js', array( 'customize-preview' ), 1.1 , true );
}
 add_action( 'customize_preview_init', 'customizer_live_preview_js' );


            //  single page       

      








      /* Category */







        


















}  // ----- End of Main-Customizer --- ---

