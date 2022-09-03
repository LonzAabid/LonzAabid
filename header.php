<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js">
    <link rel="preconnect" href="https://tpc.googlesyndication.com/sodar/sodar2.js">
    
	<link rel="prefetch" href="https://www.google-analytics.com/analytics.js">
	<link rel="prefetch" href="https://www.googletagmanager.com/">
	<link rel="prefetch" href="https://www.googletagservices.com/activeview/js/current/rx_lidar.js">
	<link rel="prefetch" href="https://googleads.g.doubleclick.net/">
	<link rel="prefetch" href="https://www.google-analytics.com/plugins/ua/linkid.js">

<?php wp_head(); ?>
</head>

<body id="body">

    <?php if(get_theme_mod('before-header', false )) : ?>
    <div class="before-header">
        <h2 class="site-title"> <?php bloginfo( 'name' ) ?> </h2>
        <h3 class="site-description"> <?php bloginfo( 'description' ) ?> </h3>
    </div>
    <?php endif; ?>

    <header class="site-header">
        <div class="site-logo">
        <?php the_custom_logo(); 

        ?>
        </div>
        <nav id="site-nav" class="site-navigation">
            <?php 
                $args = array(
                    'theme_location' => 'primary-menu',
                    'menu' => 'top-menu',
                    'container' => false,
                );
                
            wp_nav_menu($args); 
            ?>            
        </nav>
        <button name="button" class="menu-button" id="button-id" >
            
        <div id="hamburger-menu">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
            <g id="svg-id" fill="#0000" stroke-width="4px">
            
                <line x1="4" y1="10" x2="36" y2="10" stroke-linecap="round"/>
                <line x1="4" y1="20" x2="36" y2="20" stroke-linecap="round"/>
                <line x1="4" y1="30" x2="36" y2="30" stroke-linecap="round"/>
            </g>
            </svg>
        </div>

        <div id="hamburger-close">
            <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40">
            <g id="svg-id" fill="#0000" stroke-width="4px">
            
                <line x1="8" y1="8" x2="32" y2="32" stroke-linecap="round"/>
            
                <line x1="8" y1="32" x2="32" y2="8" stroke-linecap="round"/>
            </g>
            </svg>

        </div>

        </button>
                 
    </header> <!--  End of Header -->

<div class="top-banner-ad" style="padding: 0 2rem; margin: 0.5rem auto; max-width:100%; min-height:90px;">
		<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9955213525658548"
     crossorigin="anonymous"></script>
<!-- top 1 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-9955213525658548"
     data-ad-slot="8636174315"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
	</div>