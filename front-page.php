<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

        <!-- main artile n sidebar -->
<section class="grid-container">
    

    
<section class="single-page-section">

    <article class="single-page-content">
        <?php if(!is_front_page()) {?>
            <header class="single-page-header">
                <h1 class="single-page-title">
                    <?php the_title(); ?>
                </h1>
            </header>
        <?php  } ?>
                
            <div class="single-page-body">
                <?php the_content(); ?>
        </div>
                        
    </article> <!--  End of Article     -->
</section> <!--  End of page     -->
   

<?php
    $sidebar = false ;
        if(!$sidebar)
        {
?>
        <style>
            .grid-container
            {
                grid-template-columns: 1fr !important;
            }
        </style>
        </section> <!--   End of Main Grid  -->
        <section>
<?php 
        }
        else
        {
            get_sidebar();
        }



get_footer();

?>
