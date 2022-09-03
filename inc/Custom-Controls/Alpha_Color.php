<?php
/**
 * Alpha Color Picker Customizer Control
 * This control adds a second slider for opacity to the stock WordPress color picker,
 *
 */

class Alpha_Color_Control extends WP_Customize_Control {

	/**
	 * Official control name.
	 */
	public $type = 'alpha-color';

	/**
	 * Supported palette values are true, false, or an array of RGBa and Hex colors.
	 */
	public $palette;

	/**
	 * Add support for showing the opacity value on the slider handle.
	 */
	public $show_opacity;

	/**
	 * Enqueue scripts and styles.
	*/
	public function enqueue() {
		wp_enqueue_script(
			'alpha-color-picker',
			get_stylesheet_directory_uri() . '/inc/js/color-picker.js',
			array( 'jquery', 'wp-color-picker' ),
			'1.0.0',
			true
		);
		wp_enqueue_style(
			'alpha-color-picker',
			get_stylesheet_directory_uri() . '/inc/css/color-picker.css',
			array( 'wp-color-picker' ),
			'1.0.0'
		);
	}

	/**
	 * Render the control.
	 */
	public function render_content() {

		 // Output the label and description if they were passed in.
		if ( isset( $this->label )) {
			echo '<span class="customize-control-title">' . sanitize_text_field( $this->label ) . '</span>';
		}
		if ( isset( $this->description ) && '' !== $this->description ) {
			echo '<span class="description customize-control-description">' . sanitize_text_field( $this->description ) . '</span>';
		} 

		// Process the palette
		if ( is_array( $this->palette ) ) {
			$palette = implode( '|', $this->palette );
		} else {
			// Default to true.
			$palette = ( false === $this->palette || 'false' === $this->palette ) ? 'false' : 'true';
		}

		// Support passing show_opacity as string or boolean. Default to true.
		$show_opacity = true;

		// Begin the output. ?>
		<label>	
			<input class="alpha-color-control" type="text" data-show-opacity="<?php echo $show_opacity; ?>" data-palette="<?php echo esc_attr( $palette ); ?>" data-default-color="<?php echo esc_attr( $this->settings['default']->default ); ?>" <?php $this->link(); ?>  />
		</label>
		<?php
	}
}

