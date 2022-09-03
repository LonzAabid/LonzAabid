<?php 
        //   Customizer Css By User ---


function swift_customizer_css() {
    ?>
    <style id="custom-theme-mod">
        
        body
        {
            max-width: <?php echo get_theme_mod('site-width', 1280); ?>px !important;
        }
        .site-header 
        { 
            background-color : <?php echo get_theme_mod( 'header-bg-color', '#fff'); ?>; 
        }
        .site-navigation .menu-links
        {
            color : <?php echo get_theme_mod( 'menu-items-color', '#0d0e0e'); ?> !important;
            font-size : <?php echo get_theme_mod( 'menu-font-size', 16); ?>px !important;
        }
        .site-navigation .menu-links:hover
        {
            color : <?php echo get_theme_mod( 'menu-items-hover-color', '#fb7304'); ?>;
        }
       
        body
        {
            background-color : <?php echo get_theme_mod( 'site-bg-color', '#f0f4f8'); ?>;
            font-size : <?php echo get_theme_mod( 'body-font-size', 16); ?>px !important;
        }

        .main
        {
            background-color : <?php echo get_theme_mod( 'content-bg-color', '#fff'); ?>;
        }
        a:link
        {
            color : <?php echo get_theme_mod( 'link-color', '#143ceee4'); ?>;
        }
        a:visited
        {
            color : <?php echo get_theme_mod( 'link-visited-color', '#175cddf5'); ?>;
        }
        a:hover
        {
            color : <?php echo get_theme_mod( 'link-hover-color', '#f75a0c'); ?>;
        }

        <?php 
        $headings = ['h1','h2','h3','h4','h5','h6'];
        $fontSizes = array_map('intval', explode(',', get_theme_mod('headings-font-sizes', 16)));
        $iterator = 0;
        foreach($headings as $key => $value) :
            
            echo $value;?> {
                font-size: <?php echo $fontSizes[$iterator];?>px;
            }
        <?php 
        $iterator = $iterator + 1;
        $iterator++;
        endforeach; ?>

        @media (min-width: 768px) {
            <?php 
            $iterator = 1;
                foreach($headings as $key => $value) :
            
                    echo $value;?> {
                        font-size: <?php echo $fontSizes[$iterator];?>px;
                    }
                <?php 
                $iterator = $iterator + 1;
                $iterator++;
                endforeach;
            ?>            
        }

        /* ----------Single -post Margin - Padding----- */
         <?php 
         $values = get_theme_mod( 'post-box-model', 1); 
         $values = array_map('intval', explode(',', $values));
         ?>

    @media (min-width: 768px) {
        .single-post-section
        {
            margin-top:     <?php echo $values[0]; ?>px;
            margin-right:   <?php echo $values[1]; ?>px;
            margin-bottom:  <?php echo $values[2]; ?>px;
            margin-left:    <?php echo $values[3]; ?>px;

            padding-top:    <?php echo $values[4]; ?>px;
            padding-right:  <?php echo $values[5]; ?>px;
            padding-bottom: <?php echo $values[6]; ?>px;
            padding-left:   <?php echo $values[7]; ?>px;
        }

                /* Sidebar Width */
        <?php $sidebar_width = get_theme_mod('sidebar-width', 25); ?>
        .grid-container
        {
            grid-template-columns: minmax(300px, 1fr) <?php echo $sidebar_width ?>% !important;
        }
        <?php if(get_theme_mod('last-widget-sticky', true)): ?>
            .sidebar-right .widget:last-child
            {
                position: sticky;
                top: 3.5rem;
                margin-bottom: 1rem;
            }
            <?php endif; ?>

    /* media query end */
    }

    .sidebar-right
    {
        background-color : <?php echo get_theme_mod( 'sidebar-bg-color', '#f1f1f1'); ?>;
    }
    .sidebar-right .widget
    {
        margin-bottom : <?php echo get_theme_mod( 'widgets-space', 16); ?>px;
    }














    </style>

<?php
}

add_action( 'wp_head', 'swift_customizer_css', 299 );
?>
