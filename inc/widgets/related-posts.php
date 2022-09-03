<?php
/**
 * Widget API: Related_Posts class
 */

class Swift_Related_Posts extends WP_Widget {

	public function __construct() {
		$widget_ops = array(
			'classname'                   => 'related-posts-sidebar',
			'description'                 => __( 'Related Posts In Sidebar With Thumbnails.' ),
			'customize_selective_refresh' => true,
			'show_instance_in_rest'       => true,
		);
		parent::__construct( 'related-posts', __( 'Related Posts Sidebar' ), $widget_ops );
		$this->alt_option_name = 'related-posts-sidebar';
	}

	public function widget( $args, $instance ) {
		if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}

		$default_title = __( 'Related Posts' );
		$title         = ( ! empty( $instance['title'] ) ) ? $instance['title'] : $default_title;

		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );

		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 4;
		if ( ! $number ) {
			$number = 4;
		}
		$show_thumbnail = isset( $instance['show_thumbnail'] ) ? $instance['show_thumbnail'] : false;
        
        $currentId = get_the_ID();
        $category = get_the_category();
        if(!empty($category)) {
			$category_id = $category[0]->cat_ID;
		}
		$args = array(
			'posts_per_page'      => $number,
			'no_found_rows'       => true,
			'post_status'         => 'publish',
			'ignore_sticky_posts' => true,
		);

		if ( isset( $category_id) ) {
		$args['category__in'] = $category_id;}

		$r = new WP_Query( 
			apply_filters( 'widget_posts_args', $args, $instance )
		);

		if ( ! $r->have_posts() ) {
			return;
		}
		?>
        <div class="widget related-posts-sidebar">
        <?php
			$title      = trim( strip_tags( $title ) );
			$aria_label = $title ? $title : $default_title;
		?>
		<h4 class="widget-title rps-name"> <?php echo $title; ?> </h4>
		<ul class="rps-posts">
			<?php foreach ( $r->posts as $current_post ) : ?>
				<?php
				if($currentId != $current_post->ID) {
				$post_title   = get_the_title( $current_post->ID );
				$title        = ( ! empty( $post_title ) ) ? $post_title : __( '(no title)' );
				$aria_current = '';

				if ( get_queried_object_id() === $current_post->ID ) {
					$aria_current = ' aria-current="page"';
				}
				?>
				
				<li>
					<a class="rps-single" href="<?php the_permalink( $current_post->ID ); ?>"<?php echo $aria_current; ?> >
					<?php if ( $show_thumbnail ) : ?>
                        <figure class="rps-thumb">
                            <?php echo get_the_post_thumbnail($current_post->ID, 'thumbnail'); ?>
                        </figure>
						<?php endif; ?>
                        <h4 class="rps-title">
                            <?php echo $title; ?>
                        </h4>
                        
					</a>
                    </li>
			<?php 
				}
		endforeach; ?>
        </ul>
        </div>
        <?php
		}

	public function update( $new_instance, $old_instance ) {
		$instance              = $old_instance;
		$instance['title']     = sanitize_text_field( $new_instance['title'] );
		$instance['number']    = (int) $new_instance['number'];
		$instance['show_thumbnail'] = isset( $new_instance['show_thumbnail'] ) ? (bool) $new_instance['show_thumbnail'] : false;
		return $instance;
	}

	public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 5;
		$show_thumbnail = isset( $instance['show_thumbnail'] ) ? (bool) $instance['show_thumbnail'] : false;
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $title; ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'number' ); ?>"><?php _e( 'Number of posts to show:' ); ?></label>
			<input class="tiny-text" id="<?php echo $this->get_field_id( 'number' ); ?>" name="<?php echo $this->get_field_name( 'number' ); ?>" type="number" step="1" min="1" value="<?php echo $number; ?>" size="3" />
		</p>

		<p>
			<input class="checkbox" type="checkbox"<?php checked( $show_thumbnail ); ?> id="<?php echo $this->get_field_id( 'show_thumbnail' ); ?>" name="<?php echo $this->get_field_name( 'show_thumbnail' ); ?>" />
			<label for="<?php echo $this->get_field_id( 'show_thumbnail' ); ?>"><?php _e( 'Display Thumbnail' ); ?></label>
		</p>
		<?php
	}
}
 	
	add_action('widgets_init', 'swift_related_posts');
 	function swift_related_posts()
	{
		register_widget('Swift_Related_Posts');
    }