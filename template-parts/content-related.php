<?php
    /*
        Template Name: Content Related
    */
?>
<?php if(!wp_is_mobile()):
    if(get_theme_mod('related-posts', true) && !is_attachment()): 
    ?>

<section class="related-posts-section">
        <h2 class="related-section-title"> 
            <span>Related Posts</span>
        </h2>
        <?php
            $posts_count = get_theme_mod('related-posts-count', 3);
            $currentId = get_the_ID();
            $category = get_the_category();
            $category_id = $category[0]->cat_ID;
                $args = array(
                    'cat' => $category_id,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => $posts_count + 1,
                    );

        $posts = new WP_Query($args);
        if( $posts->have_posts()){ ?>
            <section class="related-posts-grid">
                
                <?php 
                    while( $posts->have_posts()){
                        $posts->the_post();
                        if($currentId != get_the_ID()):
                ?>

        <article class="related-post-single">
            <?php if(get_theme_mod('related-posts-thumb', true)): ?>
                <a href="<?php the_permalink(); ?>">
                <figure class="related-post-thumb">
                <?php the_post_thumbnail('medium'); ?>
            </figure>
            </a>
            <?php endif; ?>

            <a href="<?php the_permalink(); ?>">
                <h3 class="related-post-title">
                    <?php $title= get_the_title();
                        echo substr($title, 0, 60); 
                    ?>
                </h3>
            </a>
        </article>
        <?php endif; ?>
        <?php } ?> <!--  While End -->
    </section> <!--   Related Grid Posts End -->
        <?php } wp_reset_postdata(); ?>  <!-- End If -->
</section><!--  Related Posts Container-End -->
<?php 
endif;
endif;
