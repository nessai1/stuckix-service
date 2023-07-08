<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class Project extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('/api/v1/project', 'app_proj_create', methods: ['POST'])]
	public function create(JsonResponseFactory $jsonResponseFactory): JsonResponse
	{
		return $jsonResponseFactory->createNotImplemented();
	}
}