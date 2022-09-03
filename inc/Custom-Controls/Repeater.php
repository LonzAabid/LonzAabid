<?php
/**
 * Repeater Input Controls
 *
 */
	if ( ! class_exists( 'Repeater' ) ) {

	class Repeater extends WP_Customize_Control {

	
			
	public function render_content() {
        ?>
        <?php if ( ! empty( $this->description ) ) : ?>
		<p class="description customize-control-description"><?php echo esc_html( $this->description ); ?></p>
		<?php endif; ?>

        <div class="repeater-header">
            <span class="repeater-label"> <?php echo esc_html( $this->label ); ?></span>
            <span class="dashicons dashicons-smartphone"> </span>
            <span class="dashicons dashicons-desktop"> </span>
        </div>
        
        <?php
        if(!is_array($this->value())){
			//make values an array
			$saved_values = explode(',', $this->value());
		}
            $count = 0;
			$submit_values = $this->value();
	 foreach($this->choices as $key => $value):?>


		<div class="number-label-container">
		<?php if ( ! empty( $this->label ) ) : ?>
			<label for="<?php echo esc_attr( $key ); ?>" class="custom-label">
            <?php echo esc_html( $value ); ?></label>
		<?php endif; ?>
		
		<input type="number" 
			id="<?php echo esc_attr( $key ); ?>" 
			<?php $this->input_attrs(); ?>
			value="<?php echo $saved_values[$count]; ?>" 
			class="custom-input-number repeater" 
		/>
        <input type="number" 
			id="<?php echo esc_attr( $key ); ?>" 
			<?php $this->input_attrs(); ?>
			value="<?php echo $saved_values[$count+1]; ?>" 
			class="custom-input-number repeater" 
		/>
        
		<span class="unit"> px </span>
		</div>
		
		<?php
        $count= $count+1;
        $count++;
        endforeach;
        ?>
        <input type="hidden" id="font-sizes-submit" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo $submit_values ?>" <?php $this->link(); ?> >
        <?php
			} // --Render-End ---
	} //  --class-end----
 } // end-if
?>




