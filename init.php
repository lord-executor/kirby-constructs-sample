<?php

use SampleConstruct\Artii;


Field::$methods['monospace'] = function($field) {
	$field->value = '<pre>' . $field->value . '</pre>';
	return $field;
};

kirby()->routes([
	'sample-construct-artii' => [
		'pattern' => 'artiiproxy',
		'method' => 'GET',
		'action' => [Artii::class, 'toAsciiTextAction'],
	]
]);
