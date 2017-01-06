<?php

namespace SampleConstruct;

use Remote;
use Response;


class Artii
{
	public static function toAsciiText($text)
	{
		/** @var Response $response */
		$response = Remote::get('http://artii.herokuapp.com/make', [
			'data' => [
				'text' => $text
			],
		]);

		return $response->content();
	}

	public static function toAsciiTextAction()
	{
		return Response::json(['text' => static::toAsciiText(get('text'))]);
	}
}