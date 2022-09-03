
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
                   $layout = 1  ;
                   if($layout === 1)
                   { 
                ?>
                <section class="site-posts">
                        <?php get_template_part( 'template-parts/content', 'blog' );
                        ?>
                </section> <!--   Grid Posts End -->
                
                <?php
                }
                else
                {
                ?>
                    <section class="post-list">
                        <?php
                                get_template_part( 'template-parts/content', 'list' ); 
                        ?>
                        </section>
            <?php 
            }

            } ?>  <!-- End If -->
        
        </main> <!--  End of Main     -->
                <?php the_posts_pagination() ?>
    </section> <!--   End of Main Content Grid Column 1 -->

<?php
    $sidebar = true ;
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
