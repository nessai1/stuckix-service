<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Trace extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('api/v1/project/{projectToken}/trace', 'api_project_trace', methods: "GET")]
	public function add(string $projectToken, Request $request, JsonResponseFactory $jsonResponseFactory, ProjectRepository $projectRepository): \Symfony\Component\HttpFoundation\JsonResponse
	{
		$project = $projectRepository->findOneBy(
			[
				'token' => $projectToken
			]
		);
		if ($project === null)
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$traceContent = json_decode($request->getContent(), true);

		return $jsonResponseFactory->createNotImplemented();
	}

	#[Route('api/v1/trace/{traceUuid}', methods: 'GET')]
	public function get(string $traceUuid, JsonResponseFactory $jsonResponseFactory): \Symfony\Component\HttpFoundation\JsonResponse
	{
		return $jsonResponseFactory->createNotImplemented();
	}
}