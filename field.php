<?php

use Carbon_Fields\Carbon_Fields;
use sectsect\carbonfields\uuid\Uuid_Field;

define( 'CARBON_FIELD_UUID_DIR', __DIR__ );
define( 'CARBON_FIELD_UUID_VERSION', '1.0.0' );

Carbon_Fields::extend( Uuid_Field::class, function ( $container ) {
	return new Uuid_Field(
		$container['arguments']['type'],
		$container['arguments']['name'],
		$container['arguments']['label']
	);
});
