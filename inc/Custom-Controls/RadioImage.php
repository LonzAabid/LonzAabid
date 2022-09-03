<?php


/**
     * Radio image customize control.
     *
*/
    class RadioImage extends WP_Customize_Control {

        public $type = 'radio-image';

        public function render_content() {

            /* If no choices are provided, bail. */
            if ( empty( $this->choices ) )
                return;
            ?>

            <?php if ( !empty( $this->label ) ) : ?>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
            <?php endif; ?>

            <?php if ( !empty( $this->description ) ) : ?>
                <span class="description customize-control-description"><?php echo $this->description; ?></span>
            <?php endif; ?>


                <?php foreach ( $this->choices as $value => $args ) : ?>
                    <div class="layout-container">
                    <input type="radio" class="radio-hidden" value="<?php echo esc_attr( $value ); ?>" name="<?php echo esc_attr( "_customize-radio-{$this->id}" ); ?>" id="<?php echo esc_attr( "{$this->id}-{$value}" ); ?>" <?php $this->link(); ?> <?php checked( $this->value(), $value ); ?> /> 

                    <label class="flex-radio" for="<?php echo esc_attr( "{$this->id}-{$value}" ); ?>">
                        <span class="label-layout">
                            <?php echo esc_html( $args[ 'label' ] ); 
                    
                        ?>
                    </span>
                        <img class="icon-layout" src="<?php echo $args[ 'url' ]; ?>" alt="<?php echo esc_attr( $args[ 'label' ] ); ?>" />
                    </label>

                <?php endforeach; ?>

            </div><!-- .image -->
        <?php
        }

        public function enqueue() {
            wp_enqueue_style( 'theme-customizer', get_template_directory_uri(  ) . '/inc/css/customizer.css' , 1.0 );

        }


       

    }




    ?>

