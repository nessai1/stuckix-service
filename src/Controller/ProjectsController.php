<?php

namespace App\Controller;

use App\Repository\ProjectRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ProjectsController extends AbstractController
{
	#[Route("/projects", 'app_projects', methods: ['GET'])]
	public function index(ProjectRepository $projectRepository): Response
	{
//		if (!$this->getUser())
//		{
//			return $this->redirectToRoute('app_login');
//		}

		$projects = $projectRepository->findAll();
		$result = [];
		foreach ($projects as $project)
		{
			$result[] = [
				'name' => $project->name,
				'description' => $project->description,
				'token' => $project->token,
			];
		}

		return $this->render(
			'projects.html.twig',
			[
				'inlineJs' => $result,
			]
		);
	}

	#[Route("/projectAdd", methods: ['GET'])]
	public function add(): Response
	{
		return $this->render(
			'projectAdd.html.twig',
		);
	}
}