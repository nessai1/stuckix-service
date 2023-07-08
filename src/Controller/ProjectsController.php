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
		if (!$this->getUser())
		{
			return $this->render('security/login.html.twig', ['last_username' => null, 'error' => null]);
		}

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
}