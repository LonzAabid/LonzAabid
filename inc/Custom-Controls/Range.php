<?php



    class Range extends WP_Customize_Control {

        public $type = 'range-value';

        public function enqueue() {
            wp_enqueue_script( 'theme-customizer', get_template_directory_uri(  ) . '/inc/js/customizer.js', array( 'jquery'), 1.0 ,true );

            wp_enqueue_style( 'theme-customizer', get_template_directory_uri(  ) . '/inc/css/customizer.css' , 1.0 );
        }
    
        /**
         * Render the control's content.
         */
        public function render_content() {
            ?>
            <?php if ( !empty( $this->description ) ) : ?>
                    <span class="description customize-control-description"><?php echo $this->description; ?></span>
                <?php endif; ?>
            <div class="flex-range">
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?>
                </span>
                 
                <span class="dashicons dashicons-image-rotate" id="reset-<?php echo $this->id; ?>">
                    <span class="reset-info"> Reset</span>
                </span>
            </div>
                <div class="flex-range">
                    <input type="range" class="range-slider" id="range-<?php echo $this->id; ?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); $this->link(); ?> >

                    <input type="number" class="number-input" id="number-<?php echo $this->id; ?>" value="<?php echo esc_attr( $this->value() ); ?>" <?php $this->input_attrs(); $this->link(); ?> >
                </div>
                
                
            
<?php
        }
}

?>
