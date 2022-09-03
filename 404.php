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
       
            <section class="single-page-section">

<div class="single-page-content">
        <header class="single-page-header">
            <h1 class="single-page-title title-404">
                <?php esc_html_e( 'Sorry!  Nothing  Found:'); ?>
            </h1>
        </header>
    
        <div class="single-page-body min-50vh">
    
        <p class="align-center">
            <?php esc_html_e( 'It seem\'s the link you are looking for doesn\'t exist, or somehow it is broken.'); ?></p>
        <p class="align-center">
            <?php esc_html_e( ' Maybe Searching Can Help You.'); ?></p>
        <div class="search-container">
        <?php
        get_search_form();
         ?>
        </div>
        </div>
                    
</div> <!--  End of 404     -->
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
