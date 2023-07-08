<?php

namespace App;

use Symfony\Component\HttpFoundation\JsonResponse;

class JsonResponseFactory
{
	public function createNotImplemented(): JsonResponse
	{
		return new JsonResponse(
			[
				'errors' => [
					'reason' => 'Not implemented'
				]
			]
		);
	}
}