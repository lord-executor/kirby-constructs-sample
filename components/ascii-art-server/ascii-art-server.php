<?php

use SampleConstruct\Artii;


return function($site, $pages, $page) {

	return [
		'asciiText' => structure(Artii::toAsciiText($page->text()->value())),
	];

};
