<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Trace extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('api/v1/project/{projectUuid}/trace', 'api_project_trace', methods: "POST")]
	public function add(Request $request, JsonResponseFactory $jsonResponseFactory): \Symfony\Component\HttpFoundation\JsonResponse
	{
		return $jsonResponseFactory->createNotImplemented();
	}

	#[Route('api/v1/trace/{traceUuid}', methods: 'GET')]
	public function get(string $traceUuid, JsonResponseFactory $jsonResponseFactory): \Symfony\Component\HttpFoundation\JsonResponse
	{
		return $jsonResponseFactory->createNotImplemented();
	}
}