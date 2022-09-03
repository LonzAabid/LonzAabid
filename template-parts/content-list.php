
<?php while(have_posts()){
            the_post();
        ?>
<article class="post-list-item">
        <figure>
        <a href="<?php the_permalink();?>">
            <?php the_post_thumbnail('medium');?>
        </a>
        </figure>
                    
        <div class="title-category-flex">
            <h3 class="post-list-title">
                <a href="<?php the_permalink();?>">
                    <?php $title= get_the_title();
                        echo substr($title, 0, 60)." .."; ?>
                <a/>
            </h3> 
            <div class="post-list-category">
                <?php $cat= get_the_category();
                echo '<a href="' . esc_url(get_category_link($cat[0]->term_id)). '">' . esc_html($cat[0]->name) . '</a>';
                ?>
            </div>
        </div>
</article>
<?php 
    }
    ?> <!-- while loop end  -->


