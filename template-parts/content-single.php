
<?php
/*
    Template Name: Content Single

*/
?>

<main>
    <?php
        if(have_posts()) 
        {
			while(have_posts()) 
            {
                the_post();
            }
        } 
    ?>

<article class="single-post-content" id="single-article">
        
        <?php if(get_theme_mod('meta-breadcrumb', true)): ?>
        <div class="breadcrumb">
            <?php 
                echo '<a href="'.home_url().'" rel="nofollow"> <span> Home </span></a>';
                echo " &nbsp; &#187; &nbsp;";
                 the_category(' | ');
                echo "&nbsp; &#187; &nbsp;" ;
            ?>
                <span>
                    <?php the_title(); ?>
                </span>   
        </div><!--  BreadCrumb End -->
        <?php endif ?>

    <header class="single-post-header">
        <h1 class="single-post-title">
            <?php the_title(); ?>
        </h1>
    </header>

    <?php if(get_theme_mod( 'meta-author-cat', true)): ?>
    <div class="single-post-meta">
            <span>
                Written By: <?php the_author_posts_link(); ?>
            </span>
            <span>
                On: <?php the_date(); ?>
            </span>
            <span>
               Under: <?php the_category(' / ');  ?>
            </span>
    </div>  <!--  Single-post-Meta  -->
    <?php endif ?>
                
        <?php 
        if(has_post_thumbnail()):
         if(get_theme_mod( 'single-post-thumbnail', true)) : 
        ?>
        <div class="single-post-thumbnail">
            <?php 
            $size = get_theme_mod( 'single-post-thumbnail-size', 'medium_large');
            ?>
            <?php if(wp_is_mobile()) {
                the_post_thumbnail('medium', array( 'loading' => '' ));
            }else {
                the_post_thumbnail($size, array( 'loading' => '' ));
            }
            ?>
        </div>
        <?php endif; 
        endif;
        ?>

        <?php if( true === get_theme_mod('toc', true)): ?>
        <nav id="toc" role="doc-toc">
            <span id="toc-heading">
                Table Of Contents
            </span>

            <input type="checkbox" id="toc-checkbox">
        </nav>
        <?php endif; ?>

        <section class="single-post-body">
            <?php the_content(); ?>
        </section>

        <?php if(get_theme_mod('post-tags', true )):?>
        <div class="single-post-tags">
            <?php the_tags(' Tags: ',''); ?>
        </div>
        <?php endif; ?>
                
</article> <!--  End of Article     -->

           
</main> <!--  End of Main     -->

    <?php if(get_theme_mod('social-share-buttons', true)): $post_url = esc_url( get_permalink()); ?>

        <!-- Social Share Buttons-->
    <div class="single-social-share">
        <?php $dir = get_template_directory_uri(); ?>
        <span class="social-text">
            Share On: 
        </span>
        <span>
            <a href="#" target="_blank" rel="nofollow">
                <img class="icons" src="<?php echo $dir . '/assets/social/fb.webp' ?>" alt="Facebook">
            </a>
            
        </span>
        <span>
            <a href="#">
                <img class="icons" src="<?php echo $dir . '/assets/social/twitter.webp' ?>" alt="Twitter">
            </a>
        </span>
        <span>
            
                <img class="icons" src="<?php echo $dir . '/assets/social/whatsapp.webp' ?>" alt="WhatsApp">
            </a>
        </span>
        

    </div>  <!-- social share end -->
    <?php endif; ?>

    <div class="prev-next-pagination">
            <div id="prev-post">
                <?php
                previous_post_link( '%link', '<div class="text-arrow">
                <span class="arrow">&larr;</span>
                <span class="text">Prev</span> </div>
                <div class="title">%title</div>', true, 'category' );               

                 ?>
            </div>
            <div id="pagination-sep"> |

            </div>
            <div id="next-post">
                <?php
                next_post_link( '%link', '<div class="text-arrow"> 
                <span class="text">Next</span>
                <span class="arrow">&rarr;</span>
                 </div>
                 <div class="title">%title</div>', true, 'category' );      
                ?>
            </div>
    </div>  <!--   Pagination  End   -->

