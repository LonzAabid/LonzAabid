<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

        <!-- main artile n sidebar -->
<section class="grid-container">
    <section class="main-content-grid-1">
        <main id="main">
        <?php
        if(have_posts()) 
        {
            while(have_posts()) 
            {
                the_post();
            }
        }
        ?>

            
    
<section class="single-page-section">

<article class="single-page-content">
    <?php if(!is_front_page()) :?>
        <header class="single-page-header">
            <h1 class="single-page-title">
                <?php the_title(); ?>
            </h1>
        </header>
    <?php  endif; ?>
            
        <div class="single-page-body">
            <?php the_content(); ?>
    </div>
                    
</article> <!--  End of Article     -->
</section> <!--  End of page     -->

        
        </main> <!--  End of Main     -->
    </section> <!--   End of Main Content Grid Column 1 -->
    <?php
    $sidebar = false ;
        if(!$sidebar)
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
