<?php
/**
 * Toggle Checkbox
 *
 */
	if ( ! class_exists( 'Number_Input' ) ) {

	class Number_Input extends WP_Customize_Control {

		public function enqueue() {
            wp_enqueue_style( 'theme-customizer', get_template_directory_uri(  ) . '/inc/css/customizer.css' , 1.0 );

			// wp_enqueue_script( 'range-slider', get_template_directory_uri(  ) . '/inc/js/customizer.js', array( 'jquery' ), 1.0, true );
        }
			
	public function render_content() {
		?>
		<div class="number-label-container">
		<?php if ( ! empty( $this->label ) ) : ?>
			<label for="<?php echo esc_attr( $this->id ); ?>" class="custom-label"><?php echo esc_html( $this->label ); ?></label>
		<?php endif; ?>
		
		<input type="number" 
			id="<?php echo esc_attr( $this->id ); ?>" 
			<?php $this->input_attrs(); ?>
			<?php $this->link(); ?>
			value="<?php echo $this->value(); ?>" 
			class="custom-input-number" 
		/>
		<span class="unit"> px </span>
		</div>
		
		<?php
			} // --Render-End ---
	} //  --class-end----
 } // end-if
?>