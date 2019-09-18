<p>Add your settings here.</p>

<p class="frm6 frm_form_field">
	<label for="opt1_<?php echo esc_attr( $field['id'] ); ?>">
		<input type="checkbox" name="field_options[opt1_<?php echo esc_attr( $field['id'] ); ?>]" id="opt1_<?php echo esc_attr( $field['id'] ); ?>" value="1" <?php echo FrmField::is_option_true( $field, 'opt1' ) ? 'checked="checked"' : ''; ?> />
		<?php esc_html_e( 'Custom opt', 'formidable' ); ?>
	</label>
</p>

<p class="frm6 frm_form_field">
	<label for="opt2_<?php echo esc_attr( $field['id'] ); ?>">
		<?php esc_html_e( 'Custom opt2', 'formidable' ); ?>
	</label>
	<input type="text" name="field_options[opt2_<?php echo esc_attr( $field['id'] ); ?>]" id="opt2_<?php echo esc_attr( $field['id'] ); ?>" value="<?php echo esc_attr( $field['opt2'] ); ?>" />
</p>
