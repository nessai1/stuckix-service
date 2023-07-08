<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class IndexController extends AbstractController
{
	#[Route("/1", 'app_index', methods: ['GET'])]
	public function index(): Response
	{
		return $this->render('index.html.twig');
	}
}