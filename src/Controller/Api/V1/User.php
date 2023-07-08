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

		$user = $userRepository->findOneBy(['email' => $email]);

		if ($user instanceof \App\Entity\User)
		{
			return $jsonResponseFactory->createWithStatus(false, ['validation' => 'user with this email exist']);
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

		$userId = $userRepository->save($user, true);

		if ($userId > 0)
		{
			return $jsonResponseFactory->createWithStatus(true, ['userID' => $userId]);
		}

		return $jsonResponseFactory->createWithStatus(false, errors: ['create' => 'create']);
	}
}