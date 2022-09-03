<?php
/**
 * Toggle Checkbox
 *
 */
if ( class_exists( 'WP_Customize_Control' ) ) {

	if ( ! class_exists( 'Toggle_Checkbox' ) ) {

	class Toggle_Checkbox extends WP_Customize_Control {

		public function enqueue() {

            wp_enqueue_style( 'theme-customizer', get_template_directory_uri(  ) . '/inc/css/customizer.css' , 1.0 );
        }
			

	public function render_content() {
		$id         = 'customize-input-' . $this->id;
		$description_id   = 'customize-description-' . $this->id;
		$describedby_attr = ( ! empty( $this->description ) ) ? ' aria-describedby="' . esc_attr( $description_id ) . '" ' : '';	
		?>
		<div>
		<?php if ( ! empty( $this->description ) ) : ?>
				<span id="<?php echo esc_attr( $description_id ); ?>" class="description customize-control-description"><?php echo $this->description; ?>
				</span>
				<?php endif; ?>
			<div class="toggle-checkbox">
				<input id="<?php echo esc_attr( $id ); ?>" class="toggle-checkbox-input" <?php echo $describedby_attr; ?> type="checkbox" value="<?php echo esc_attr( $this->value() ); ?>"
				<?php $this->link(); ?>
				<?php checked( $this->value() ); ?>
				/>
				<label for="<?php echo esc_attr( $id ); ?>" class="toggle-checkbox-label" >
					<?php echo esc_html( $this->label ); ?>
				</label>
			</div><!--  --Flex--End-- -->
		</div>
		<?php
			} // --Render-End ---
		}
	}
 } //  --class-end----
