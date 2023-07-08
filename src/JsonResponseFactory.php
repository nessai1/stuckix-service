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

	public function createWithStatus(bool $isSuccess, array $data = [], array $errors = []): JsonResponse
	{
		return (new JsonResponse())->setData([
				'isSuccess' => $isSuccess,
				'data' => $data,
				'errors' => $errors
		]);
	}

	public function createInvalidData(): JsonResponse
	{
		return new JsonResponse(
			[
				'errors' => [
					'reason' => 'Invalid data'
				]
			]
		);
	}
}