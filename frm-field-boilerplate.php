<?php
/*
Plugin Name: Formidable Forms Field Boilerplate
Description: Create a custom field type in Formidable Forms.
Version: 1.0
Plugin URI: https://formidableforms.com/
Author URI: https://formidableforms.com/
Author: Strategy11
*/


// TODO: replace 'prefix_' and 'Prefix' with your own.
// TODO: replace 'new-type' with the slug for your field.

/**
 * Add the autoloader.
 */
function prefix_load_formidable_field() {
	spl_autoload_register( 'prefix_forms_autoloader' );
}
add_action( 'plugins_loaded', 'prefix_load_formidable_field' );

/**
 * @since 3.0
 */
function prefix_forms_autoloader( $class_name ) {
	// Only load Prefix classes here
	if ( ! preg_match( '/^Prefix.+$/', $class_name ) ) {
		return;
	}

	$filepath = dirname( __FILE__ );
	$filepath .= '/' . $class_name . '.php';

	if ( file_exists( $filepath ) ) {
		require( $filepath );
	}
}

/**
 * Tell Formidable where to find the new field type.
 * @return string The name of the new class that extends FrmFieldType.
 */
function prefix_get_field_type_class( $class, $field_type ) {
	if ( $field_type === 'new-type' ) { // Replace 'new-type' with your field slug.
		$class = 'PrefixFieldNewType'; // Set your class name here.
	}
	return $class;
}
add_filter( 'frm_get_field_type_class', 'prefix_get_field_type_class', 10, 2 );

function prefix_add_new_field( $fields ) {
	$fields['new-type'] = array(
		'name' => 'My Field',
		'icon' => 'frm_icon_font frm_pencil_icon', // Set the class for a custom icon here.
	);
	return $fields;
}
add_filter( 'frm_available_fields', 'prefix_add_new_field' );
