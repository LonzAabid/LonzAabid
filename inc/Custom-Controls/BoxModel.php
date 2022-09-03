<?php


if ( class_exists( 'WP_Customize_Control' ) ) {
	if ( ! class_exists( 'BoxModel' ) ) {
		class BoxModel extends WP_Customize_Control {
	public $type = 'box_model';
		

	public function enqueue() {
		wp_enqueue_style( 'theme-customizer', get_template_directory_uri(  ) . '/inc/css/customizer.css' , 1.0 );

		// wp_enqueue_script( 'theme-customizer', get_template_directory_uri(  ) . '/inc/js/customizer.js', array( 'jquery' ), 1.0, true );
	}


	public function render_content() {
		if ( ! empty( $this->label ) ) : ?>
		<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
		<?php endif;
		if ( ! empty( $this->description ) ) : ?>
		<p class="description customize-control-description"><?php echo esc_html( $this->description ); ?></p>
		<?php endif;
		$saved_values = [];
		$submit_values;

		if(!is_array($this->value())){
			//make values an array
			$saved_values = explode(',', $this->value());
			
			$submit_values = implode(',', $saved_values);
		}
            ?>
        <div style="text-align: center;">
            <img src="<?php echo get_template_directory_uri(  ).'/assets/images/customizer/box-model.png';?>">
        </div>
		<div class="box-model-wrapper">
        <?php
		$fields = ['Top','Right','Bottom','Left'];
			foreach ( $this->choices as $key => $value ) {
				if ( 'margin' === $key ) { ?>
                <div class="box-model-label"><?php esc_html_e( 'Margin ( px )', 'swift' ); ?></div>
                
				<div class="box-model-margin">
					
					<?php
					$margin_count = 0;
					
					$i = 0;

					foreach ( $value as $m_key => $m_value ) {
						
						?><span class="<?php echo esc_html( $m_key )?>">
						<span class="fields-name">
						<?php echo esc_html( $fields[$i] ) ?></span>
						
						<input type="number" placeholder="-" 
						value="<?php echo $saved_values[$margin_count]; ?>" 
						class="box-model-field" />
						
						<?php $margin_count++;
						$i++; ?>
					</span><?php } ?>
				</div><?php
				}
				if ( 'padding' === $key ) { ?>
                <div class="box-model-label"><?php esc_html_e( ' Padding ( px )', 'swift' ); ?></div>
                
				<div class="box-model-padding">
					<?php
					$padding_count = 4; // margin takes array keys 0-3, padding 4-7.
					$i = 0;
					foreach ( $value as $p_key => $p_value ) {
						?><span class="<?php echo esc_html( $p_key )?>">
						<span class="fields-name">
						<?php echo esc_html( $fields[$i] ); ?></span>
						
						<input type="number" placeholder="-" 
						value="<?php echo $saved_values[$padding_count] ?>" 
						class="box-model-field"  />
					<?php $padding_count++;
					$i++; ?>
					</span>
					<?php } ?>
				</div><?php
				}
			} ?>
				
			<input type="hidden" id="<?php echo esc_attr( $this->id ); ?>" name="<?php echo esc_attr( $this->id ); ?>" value="<?php echo $submit_values ?>" class="box-model-saved" <?php $this->link(); ?> />
				
		</div><!-- box model wraper -->
<?php
		}
	}
	}
}


?>


