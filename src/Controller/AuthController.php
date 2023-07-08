<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
	#[Route("/login", 'app_login', methods: ['GET'])]
	public function index(): Response
	{
		return $this->render('login/index.html.twig');
	}

	#[Route("/register", 'app_register', methods: ['GET'])]
	public function register(): Response
	{
		return $this->render('register/index.html.twig');
	}
}