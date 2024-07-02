/**
 * External dependencies.
 */
import { registerFieldType } from '@carbon-fields/core';

/**
 * Internal dependencies.
 */
import './style.scss';
import Field from './App';

registerFieldType( 'uuid', Field );

