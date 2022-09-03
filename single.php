<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

        <!-- main artile n sidebar -->
        
<section class="grid-container">
    <section class="main-content-grid-1">
        <section class="single-post-section">
            <?php
            get_template_part( 'template-parts/content', 'single' );
            ?>
        </section> <!--  Single Post End  -->
    </section> <!--   End of Main Content Grid -Column 1 -->

    <?php
    $layout = get_theme_mod( 'single-post-layout', 'sidebar-right' );
  
        if($layout === 'full-width')
        { ?>
            <style>
                .grid-container
                {
                    grid-template-columns: 1fr !important;
                }
            </style>
    </section> <!--   End of Main Grid  -->
        <section> <!--  open section for grid child section 2 closed in footer  -->
    <?php 
        }
        else
        {
            get_sidebar();
        }



 get_footer();
?>
