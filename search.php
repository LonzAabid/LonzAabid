
<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();
?>

        <!-- main artile n sidebar -->
<section class="full-width">
        <main id="main">
        <section class="single-page-section">

<div class="single-page-content">
    
        <header class="single-page-header">
            <h1 class="single-page-title">
                <?php printf( esc_html__( 'Search Results for: %s', 'responsive-blog' ), '<span>' . get_search_query() . '</span>' );
				?>
            </h1>
        </header>

                    

        <?php
        if(have_posts()) {
        ?>
        <div class="search-results-count">
		<?php printf( esc_html__( 'We found %s results for your search query.', 'responsive-blog' ), '<span>' .  $wp_query->found_posts . '</span>' );
				?>
	</div><!-- .search-result-count -->
    <div class="search-more">
        <div class="search-container">
            <?php get_search_form() ?>
        </div>
    </div>

            <?php
                get_template_part( 'template-parts/content', 'blog' );
            ?>
                <?php the_posts_pagination() ?>

       <?php
        } else {
            ?>
            <div class="single-page-body min-50vh">
            <p class="align-center">
                <?php esc_html_e( 'Sorry, but nothing matched your search terms. ', 'responsive-blog' ); ?>
            </p>
            <p class="align-center">
                <?php esc_html_e( ' Please try again with some different keywords.', 'responsive-blog' ); ?>
            </p>
            <div class="search-container">
			<?php
			get_search_form();
        }
            ?>
            </div>
            </div> <!-- single page body -->
            </div> <!--  End of Article     -->
</section> <!--  End of page     -->

        </main> <!--  End of Main     -->
    </section> <!--   End of Main Content Grid Column 1 -->
 <?php
 
get_footer();

?>
