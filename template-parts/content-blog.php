
   <section class="site-posts">

    <?php while(have_posts()){
            the_post();
    ?>
    <article class="post-card">

        <a href="<?php the_permalink(); ?>">
            <figure>
                <?php if(wp_is_mobile()) {
                    the_post_thumbnail('medium');
                }else {
                    the_post_thumbnail('large');
                }
                ?>
            </figure>
            <h2 class="card-post-title">
                <?php $title= get_the_title();
                    echo substr($title, 0, 58)." .."; 
                ?>
            </h2>
        </a>


        <div class="post-category">
        <?php $cat= get_the_category();
            if ($cat) :
                echo '<a href="' . esc_url(get_category_link($cat[0]->term_id)). '">' . esc_html($cat[0]->name) . '</a>';
            endif;
            ?>
        </div>

    </article>

    <?php 
    }
    ?> <!-- while loop end  -->
</section>
