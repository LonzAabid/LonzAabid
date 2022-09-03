
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
            <div class="single-page-content">
        
            <header class="single-page-header">
                <h1 class="single-page-title">
                <?php if(is_home()) {?> Blog
                    <?php  } else {
                        the_title();
                    }  ?>
                </h1>
            </header>
            </div>
       
           
           <?php
                if(have_posts())
                {
                    $layout = get_theme_mod( 'blog-posts-layout', 'grid') ;
                    if($layout === 'grid')
                    { 
                 ?>
                         <?php get_template_part( 'template-parts/content', 'blog' );
                         ?>
                 
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
     $layout = get_theme_mod( 'blog-layout', 'sidebar-right' );
   
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
