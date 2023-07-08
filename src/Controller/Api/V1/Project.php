<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use App\Repository\ProjectRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Uid\Uuid;

class Project extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('/api/v1/project', 'app_proj_create', methods: ['POST'])]
	public function create(Request $request, JsonResponseFactory $jsonResponseFactory, ProjectRepository $projectRepository): JsonResponse
	{
		$user = $this->getUser();

		if (!$user)
		{
			return $jsonResponseFactory->createAccessDenied();
		}

		$json = json_decode($request->getContent(), true);
		$name = $json['name'] ?? null;
		if (empty($name))
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$description = $json['description'] ?? null;

		$project = new \App\Entity\Project();
		$project->name = $name;
		$project->token = (string)Uuid::v4();
		$project->createDateTime = new \DateTimeImmutable();

		if ($user instanceof \App\Entity\User)
		{
			$project->addUser($user);
		}

		if (is_string($description))
		{
			$project->description = $description;
		}

		try
		{
			$projectRepository->save($project);
		}
		catch (\Exception $exception)
		{
			return $jsonResponseFactory->createInvalidData();
		}

		return new JsonResponse([
			'success' => true,
			'data' => [
				'token' => $project->token,
			]
		]);
	}
}