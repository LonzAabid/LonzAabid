<?php

if(!isset($content_width))
    $content_width = 1280;

if ( ! function_exists( 'edutheme_setup' ) ) {
	add_action( 'after_setup_theme', 'edutheme_setup' );

    function edutheme_setup(){
        //navigation menu
        register_nav_menus(
            array(
                'primary-menu' => 'Top Menu',
                'footer-menu' => 'Footer Menu',
        ));
        // thumbnail suport
        add_theme_support( 'post-thumbnails' );
        //custom logo
        add_theme_support(
			'custom-logo',
			array(
				'height' => 70,
				'width' => 320,
				'flex-height' => true,
				'flex-width' => true,
			)
		);
        add_theme_support('post-formats', array(
            'aside',
             'gallery',
              'quote',
               'image',
                'video'
            ));
        // add_theme_support('custom-header');
        add_theme_support('title-tag');

        add_theme_support( 'html5', array( 'search-form' ) );

        //Sidebar
        
            function edutheme_sidebar()
            {
                
                    $sidebar_right = array(
                        'id' => 'sidebar-right',
                        'name' => __('Right Sidebar'),
                        'before_widget' => '<div id = "%1$s" class="widget %2$s">',
                        'after_widget' => '</div>',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>',
                    );
                    $sidebar_left = array(
                        'id' => 'sidebar-left',
                        'name' => __('Left Sidebar'),
                        'before_widget' => '<div id = "%1$s" class="widget %2$s">',
                        'after_widget' => '</div>',
                        'before_title' => '<h4 class="widget-title">',
                        'after_title' => '</h4>',
                    );
                register_sidebar($sidebar_right);
                register_sidebar($sidebar_left);
                    
            }
            add_action('widgets_init', 'edutheme_sidebar');
            

            function edutheme_footer()
            {
                $sidebar_footer = array(
                    'id' => 'sidebar-footer',
                    'name' => __('Footer Sidebar'),
                    'before_widget' => '<div id = "%1$s" class="widget %2$s">',
                    'after_widget' => '</div>',
                    'before_title' => '<h4 class="widget-title">',
                    'after_title' => '</h4>',
                );
                register_sidebar($sidebar_footer);
            }
            add_action('widgets_init', 'edutheme_footer');
            
        }
    }  //theme-setup end

    // Theme Dir
    $Theme_Url = get_template_directory(  );
 
    //   Svg Icons Class
require $Theme_Url . '/assets/class/class-svg-icons.php';

// ------ Widgets -----
require $Theme_Url . '/inc/widgets/related-posts.php';




function add_sub_menu_toggle( $output, $item, $depth, $args ) {
	if ( in_array( 'menu-item-has-children', $item->classes, true ) ) {

		// Add toggle button.
        $output = '<div class="flex">' . $output;
		$output .= '<button class="sub-menu-toggle" aria-expanded="false">';
		$output .= '<span class="menu-icon">' . get_icon_svg( 'ui', 'arrow_down', 15 ) . '</span>';
		$output .= '<span class="screen-reader-text">' . esc_html__( 'Open menu', 'twentytwentyone' ) . '</span>';
		$output .= '</button></div>';
	}
	return $output;
}
add_filter( 'walker_nav_menu_start_el', 'add_sub_menu_toggle', 10, 4 );

    //add class to menu anchor links
function add_extra_attrs_menu($atts, $item, $args )
{
    if($args->theme_location == 'primary-menu'){
        $atts['class'] = 'menu-links';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_extra_attrs_menu', 10 , 3);

/**
 * Disable the wordpress emoji's
 */
function disable_emoji_feature() {
	
	// Prevent Emoji from loading on the front-end
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	// Remove from admin area also
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );

	// Remove from RSS feeds also
	remove_filter( 'the_content_feed', 'wp_staticize_emoji');
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji');

	// Remove from Embeds
	remove_filter( 'embed_head', 'print_emoji_detection_script' );

	// Remove from emails
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );

	// Disable from TinyMCE editor. Currently disabled in block editor by default
	add_filter( 'tiny_mce_plugins', 'disable_emojis_tinymce' );

	/** Finally, prevent character conversion too
         ** without this, emojis still work 
         ** if it is available on the user's device
	 */

	add_filter( 'option_use_smilies', '__return_false' );

}

function disable_emojis_tinymce( $plugins ) {
	if( is_array($plugins) ) {
		$plugins = array_diff( $plugins, array( 'wpemoji' ) );
	}
	return $plugins;
}

add_action('init', 'disable_emoji_feature');



function register_edutheme_style()
{
    $THEME_DIR = get_template_directory_uri( );
    
    wp_register_style('header', $THEME_DIR . '/assets/css/header.css', array(), 1.0, 'all');

    wp_register_style('single', $THEME_DIR . '/assets/css/single.css', array(), 1.1, 'all');

    wp_register_style('archive', $THEME_DIR . '/assets/css/archive.css', array(), 1.1, 'all');

    wp_register_style('footer', $THEME_DIR . '/assets/css/footer.css', array(), 1.1, 'all');

    wp_register_style('page', $THEME_DIR . '/assets/css/page.css', array(), 1.1, 'all');

    wp_register_style('attachment', $THEME_DIR . '/assets/css/attachment.css', array(), 1.1, 'all');

    // wp_enqueue_style('header');

    if( is_single() ){
        wp_enqueue_style('single');
    } else {
        wp_enqueue_style('archive');
        wp_enqueue_style('page');
    }
    if(is_attachment( )){
        wp_enqueue_style('attachment');
    }

    wp_enqueue_style('footer');


    wp_register_script('main', $THEME_DIR.'/assets/js/main.min.js', array(), 1.0, true);
    wp_enqueue_script('main');

}
add_action('wp_enqueue_scripts', 'register_edutheme_style');
 
// -------Inline CSS -----
function inline_critical_css(){
    ?>
    <style id="inline-critical-css">
        :root{--main-bg-color:#f0f4f8;--content-bg-color:#fff;--site-header-bg-color:#fff;--menu-items-color:#0d0e0e;--menu-hover-color:#fb7304;--menu-item-bg-clr:#00fb;--mobile-menu-btn-clr:#000;--submenu-bg-color:#fdffff;--text-color:#1E1E1E;--body-font-size:16px;--mobile-font-size:18px;--desktop-font-size:20px;--font-family:"Open Sans","Segeo UI",Roboto,Tahoma,Verdana,Arial;--heading-font-family:"Open Sans","Segeo UI",Tahoma,Arial;--heading-font-color:#1D1F25;--color-cyan:#1ad2df;--footer-bg-color:#1b1b1b;--footer-text-color:#ececec;--link-color:#143ceee4;--link-visited:#175cddf5;--link-hover:#f75a0c;--single-post-title-size:50px;--mobile-h1-size:30px;--light-border:#f2f2f2;--light-grey:#dfdddd;--toc-bg-color:#fafcff}*,*::before,*::after{margin:0;padding:0;box-sizing:border-box}html{scroll-behavior:smooth;scroll-padding-top:5rem}body{font-family:var(--font-family);font-weight:400;font-size:var(--body-font-size);color:var(--text-color);line-height:1.6;background-color:var(--main-bg-color);max-width:1280px}a:link{color:var(--link-color);text-decoration:none}a:visited{color:var(--link-visited)}a:hover{color:var(--link-hover)}a:focus{outline:1px solid var(--link-hover)}a:hover,a:active{outline:0}h1,h2,h3,h4,h5,h6{font-family:var(--heading-font-family);line-height:1.3;color:var(--heading-font-color);padding:0}.before-header{display:flex;flex-wrap:wrap;justify-content:space-between;align-items:center;padding:.4rem 1rem;background-color:var(--content-bg-color)}.site-header{display:flex;justify-content:space-between;align-items:center;padding-inline:1rem;background-color:var(--site-header-bg-color);border-radius:.5rem}.site-header .site-logo{min-width:150px;min-height:50px}.site-logo img{max-width:140px;max-height:50px;object-fit:fill}#site-nav{display:none}.site-navigation>ul{list-style:none;display:flex;flex-direction:column;align-items:flex-start;margin:0;padding:3rem .4rem 1rem 1rem;border-radius:1rem;background-color:var(--site-header-bg-color);position:absolute;top:1rem;right:8px;width:90vw;min-height:85vh;z-index:3;box-shadow:2px 3px 4px 0 #d1cfcfed,-3px -3px 3px 0 #d8d8d8}.site-navigation>ul li{width:100%;margin:.8rem 0;padding-inline:.5rem}.site-navigation .menu-item-has-children{position:relative}.flex{display:flex;justify-content:space-between;align-items:center;margin-right:.4rem}.menu-item-has-children .sub-menu-toggle{display:flex;justify-content:center;align-items:center;border:none;cursor:pointer;background-color:transparent;border-radius:.2rem;padding:0;margin:0;opacity:.7}.sub-menu-toggle:hover,.sub-menu-toggle:focus-within{opacity:1}.sub-menu-toggle svg{stroke:var(--menu-items-color);stroke-width:2px}.sub-menu-toggle svg:hover{position:relative;transform:scale(1.2)}.site-navigation .menu-links{color:var(--menu-items-color);display:block;width:100%;font-size:1rem;line-height:1.3;text-decoration:none}.site-navigation .menu-links:hover{color:var(--menu-hover-color)}.sub-menu{list-style-type:none}.site-navigation .sub-menu{position:relative;top:.5rem;left:0;right:0;padding:.5rem;margin-bottom:.5rem;margin-left:.3rem;background-color:var(--submenu-bg-color);z-index:1;border-left:2px solid var(--color-cyan);display:none}.site-navigation .sub-menu .sub-menu{background-color:var(--submenu-bg-color);position:relative;margin-left:.5rem;margin-bottom:1rem;padding:.5rem;border-left:2px solid var(--color-cyan);display:none}.site-navigation .menu-item-has-children:hover>.sub-menu,.site-navigation .menu-item-has-children:focus-within>.sub-menu{display:block;opacity:1;transform:translateY(0)}.show-submenu{display:block!important}.menu-button{background-color:transparent;z-index:11;width:2.2rem;height:2.2rem;display:flex;place-items:center;border:none}.menu-button svg{width:2rem;height:2rem}.menu-button svg>#svg-id{stroke:var(--mobile-menu-btn-clr)}.menu-button:hover{cursor:pointer}.menu-button:hover svg>#svg-id{stroke:var(--link-color)}#hamburger-menu{display:block}#hamburger-close{display:none;position:absolute;top:1.6rem;right:1.4rem}@media (min-width:768px){.site-header{position:relative;max-width:100%;margin:1rem;margin-bottom:0;border-radius:.5rem;z-index:9}#site-nav{display:block!important}.site-navigation>ul{position:static;width:100%;min-height:auto;height:auto;display:flex;flex-direction:row;flex-wrap:wrap;justify-content:center;align-items:center;margin:0 auto;background-color:inherit;padding:0;box-shadow:none}.site-navigation>ul li{width:auto;padding:0;margin:0;margin-right:.1rem;border-radius:.4rem;transition:all 0.2s ease-in-out}.site-navigation .menu-links{display:inline-block;width:auto;font-size:.96rem;text-transform:capitalize;padding:.3rem .4rem;border-radius:.4rem;color:var(--menu-items-color)}.site-navigation .menu-links:hover{color:var(--menu-hover-color)}.menu-button{display:none}.site-navigation>ul>.menu-item-has-children::after{content:"";position:absolute;display:block;top:95%;right:0;width:100%;height:1rem}.site-navigation .sub-menu{margin:0;padding:.4rem 0;position:absolute;top:calc(85% + 1rem);left:auto;right:0;min-width:200px;border:none;border-top:2px solid var(--link-color);box-shadow:4px 4px 1rem 0 #adadad86,-2px -4px 1rem 0 #8f8f8f88;border-radius:.4rem;z-index:9;opacity:0}.site-navigation .sub-menu li{padding:0;margin-bottom:.8rem;border-bottom:1px solid var(--light-border)}.site-navigation .sub-menu .menu-links{display:block;width:100%;padding:.4rem;padding-left:1rem;font-size:.95rem;color:var(--menu-items-color);transition:all 0.2s ease-in}.site-navigation .sub-menu .menu-links:hover{color:var(--menu-hover-color)}.site-navigation .sub-menu .sub-menu{position:absolute;margin:0;padding:.3rem 0;top:-1rem;right:97%;min-width:200px;border:none;border-top:2px solid var(--link-color);outline:1px solid var(--light-border);box-shadow:3px 3px 1rem 0 rgba(197,197,197,.8),-3px -3px 1rem 0 #cacacad3;border-radius:.5rem;z-index:19}}
        @media(min-width:768px){.grid-container{display:grid;grid-template-columns:minmax(300px,1fr) 25%;gap:.5rem}}.single-post-section{margin:.7rem 0;background-color:var(--content-bg-color);border-radius:.5rem;padding-bottom:1rem}.breadcrumb{padding:.5rem;border-bottom:1px solid var(--light-border)}.breadcrumb *{font-size:12px;line-height:1.3}.breadcrumb ul{list-style:none}.breadcrumb ul li a,.breadcrumb a{text-decoration:none}.single-post-header{border-bottom:1px solid var(--light-border);margin:1rem 0}.single-post-title{font-size:var(--mobile-h1-size);padding:.5rem;margin:1rem 0}.single-post-meta{display:flex;flex-wrap:wrap;gap:.3rem;margin:1rem 0;padding:.5rem 0;border-bottom:1px solid var(--light-border)}.single-post-meta span{font-size:12px;padding:.5rem;line-height:1.3}.single-post-meta * a{text-transform:capitalize}.single-post-thumbnail{margin:1rem;min-height:168px}.single-post-thumbnail img{display:block;margin-inline:auto;max-width:100%;height:auto;aspect-ratio:auto;border-radius:.5rem}.single-post-body{padding:1rem .6rem;font-size:var(--mobile-font-size);font-weight:400;line-height:1.6;word-spacing:3px;overflow-wrap:break-word}@media (min-width:768px){.single-post-section{margin:1rem}.single-post-header{margin:1rem;border-bottom:1px solid var(--light-border)}.single-post-title{font-size:var(--single-post-title-size);padding:2rem 1rem}.single-post-meta{display:flex;flex-wrap:wrap;gap:.5rem;border-bottom:1px solid var(--light-border);margin-bottom:2rem}.single-post-meta span{font-size:13px;padding:.5rem}.single-post-meta * a{text-transform:capitalize}.single-post-thumbnail{margin:1.5rem 0;min-height:400px}.single-post-body{padding:1rem 2rem;font-size:var(--desktop-font-size)}}.sidebar-right{padding:0;margin:.5rem}@media (min-width:768px){.sidebar-right{padding:0;margin:1rem 1rem .5rem 0}}.sidebar-right ul{list-style:none}.sidebar-right ul a{text-decoration:none}.sidebar-right .widget{padding:.4rem .3rem .4rem .7rem;margin-bottom:1rem;background:var(--content-bg-color);box-shadow:-3px -3px 3px 0 #f4f4f4da,3px 3px 3px 0 #f1f1f1fd;border-radius:.5rem}.sidebar-right .widget-title{display:inline-block;margin-left:.3rem;padding:0 4px;margin-bottom:1.3rem;border-bottom:2px solid var(--light-border);font-weight:400}.sidebar-right .widget ul li{margin-bottom:.5rem;font-size:1rem}.sidebar-right .widget_recent_entries li::before{content:"";border-left:3px solid var(--color-cyan);padding-right:10px}.sidebar-right .widget_recent_entries ul li{margin-bottom:1rem}.sidebar-right .widget:last-child{position:sticky;top:4rem;margin-bottom:1rem}.search-form{display:flex;padding:.3rem;justify-content:space-between;align-items:center;position:relative}.search-form .search-field{font-size:14px;padding-left:.4rem;color:#000;border:none;border:1px solid var(--light-border);outline:none;height:2rem;background-color:var(--main-bg-color);border-radius:.4rem}.search-form .search-field::placeholder{color:#555}.search-field:focus{border:1px solid var(--light-border)}.search-btn{height:2rem;width:2rem;display:flex;place-items:center;padding:4px 5px;margin-left:.3rem;position:relative;border:none;background-color:var(--main-bg-color);border-radius:.4rem;cursor:pointer}.search-btn .search-icon{width:1.2rem;height:1.2rem;fill:var(--text-color);opacity:.6}.search-form .search-submit{text-indent:-99px;pointer-events:none;overflow:hidden;width:100%;height:100%;border:none;padding:0;margin:0;cursor:pointer;position:absolute;top:0;z-index:3;background-color:transparent}.search-btn .search-icon:hover{opacity:1}
    </style>
    <?php
}
 add_action( 'wp_head', 'inline_critical_css', 29);

//  ------- defer Css -----
    function defer_css( $html, $handle ) {
        if ( $handle === 'footer' || $handle === 'single' || $handle === 'wp-block-library' ) {
            $html = str_replace( 'media=\'all\'' , ' media=\'print\' onload=this.media=\'all\'', $html );
        }
        return $html;
    }
    add_filter( 'style_loader_tag', 'defer_css', 12, 2 );

//  ------- defer JavaScript -----
    function defer_js( $url ) {
        if ( is_user_logged_in() ) return $url; //don't break WP Admin
    if ( FALSE === strpos( $url, '.js' ) ) return $url;
    if ( strpos( $url, 'jquery.js' ) ) return $url;
    return str_replace( ' src', ' defer src', $url );
    }
    add_filter( 'script_loader_tag', 'defer_js', 10, 1 );
    
    // -----------Remove Meta Tags--------
    remove_action( 'wp_head', 'wp_generator');
    remove_action( 'wp_head', 'wp_oembed_add_discovery_links');
    remove_action( 'wp_head', 'feed_links');
    remove_action( 'wp_head', 'feed_links_extra');
    remove_action( 'wp_head', 'wlwmanifest_link');
    remove_action( 'wp_head', 'rsd_link');
    remove_action( 'wp_head', 'wp_shortlink_wp_head');

        //      Get Customizer Api
if ( ! function_exists( 'theme_customizer' ) ) 
{
    add_action( 'after_setup_theme', 'theme_customizer' );

    function theme_customizer()
    {
        $dir = get_template_directory() . '/inc';

        //     --Register Sections/Controls --
        
        require $dir.'/customizer.php';
        
        //    --CSS Generated In Customizer--

        require $dir.'/customizer-css.php';
    
    }

}

