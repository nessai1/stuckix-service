<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class User extends AbstractController
{
	#[Route('/api/v1/user', 'app_user_register', methods: ['POST'])]
	public function register(Request $request, Security $security, JsonResponseFactory $jsonResponseFactory, UserPasswordHasherInterface $passwordHasher, UserRepository $userRepository): JsonResponse
	{
		$json = json_decode($request->getContent(), true);
		$email = isset($json['email']) ? (string)$json['email'] : '';
		$password = isset($json['password']) ? (string)$json['password'] : '';
		$name = isset($json['name']) ? (string)$json['name'] : '';
		$surname = isset($json['surname']) ? (string)$json['surname'] : '';

		if ($email === '' || $password === '' || $name === '')
		{
			return $jsonResponseFactory->createWithStatus(false, ['validation' => 'not filled required fields']);
		}

		$user = new \App\Entity\User();
		$hashedPassword = $passwordHasher->hashPassword(
			$user,
			$password
		);
		$user->setEmail($email)
			->setName($name)
			->setRoles(['ROLE_USER'])
			->setPassword($hashedPassword);

		if ($surname !== '')
		{
			$user->setSurname($surname);
		}

		$userRepository->save($user, true);
		$login = $security->login($user);

		if (!$login->isSuccessful())
		{
			return $jsonResponseFactory->createWithStatus(false, errors: ['login' => 'no login']);
		}

		return $jsonResponseFactory->createWithStatus($login->isSuccessful(), $login->getVary());
	}

	#[Route('/api/v1/login', 'app_user_login', methods: ['POST'])]
	public function login(Request $request, Security $security, JsonResponseFactory $jsonResponseFactory, UserPasswordHasherInterface $passwordHasher, UserRepository $userRepository): JsonResponse
	{
		$email = (string)$request->get('email');
		$password = (string)$request->get('password');

		if ($email === '' || $password === '')
		{
			return $jsonResponseFactory->createWithStatus(false, ['validation' => 'not filled required fields']);
		}

		$user = $userRepository->findOneBy(['email' => $email]);

		if (!($user instanceof \App\Entity\User))
		{
			return $jsonResponseFactory->createWithStatus(false, ['validation' => 'not user with this email']);
		}

		$isValidPassword = $passwordHasher->isPasswordValid($user, $password);

		if (!$isValidPassword)
		{
			return $jsonResponseFactory->createWithStatus(false, errors: ['login' => 'no correct password']);
		}

		$login = $security->login($user);

		if (!$login->isSuccessful())
		{
			return $jsonResponseFactory->createWithStatus(false, errors: ['login' => 'no login']);
		}

		return $jsonResponseFactory->createWithStatus($login->isSuccessful(), $login->getVary());
	}
}