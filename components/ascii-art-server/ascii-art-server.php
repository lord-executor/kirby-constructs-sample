<?php

return function($site, $pages, $page) {

	$response = Remote::get('http://artii.herokuapp.com/make', [
		'data' => [
			'text' => $page->text()->value()],
	]);

	return [
		'asciiText' => $response->content(),
	];

};
