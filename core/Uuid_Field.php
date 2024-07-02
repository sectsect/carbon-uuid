<?php

namespace sectsect\carbonfields\uuid;

use Carbon_Fields\Field\Field;

class Uuid_Field extends Field
{
	public static function admin_enqueue_scripts()
	{
		$root_uri = \Carbon_Fields\Carbon_Fields::directory_to_url( CARBON_FIELD_UUID_DIR );

		wp_enqueue_script('uuid', $root_uri . '/dist/bundle.js', ['carbon-fields-core'], CARBON_FIELD_UUID_VERSION);
		wp_enqueue_style('uuid', $root_uri . '/dist/bundle.css', [], CARBON_FIELD_UUID_VERSION);
	}

	/**
	 * Load the field value from an input array based on its name
	 *
	 * @param array $input Array of field names and values.
	 */
	public function set_value_from_input($input)
	{
		parent::set_value_from_input($input);

		$value = $this->get_value();

		$this->set_value($value);
	}

	/**
	 * Returns an array that holds the field data, suitable for JSON representation.
	 *
	 * @param bool $load  Should the value be loaded from the database or use the value from the current instance.
	 * @return array
	 */
	public function to_json($load)
	{
		$field_data = parent::to_json($load);

		$field_data = array_merge($field_data, []);

		return $field_data;
	}
}
