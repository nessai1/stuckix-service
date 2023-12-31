<?php

namespace App\Controller\Api\V1;

use App\JsonResponseFactory;
use App\Repository\ProjectRepository;
use App\Repository\TraceRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class Trace extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('/api/v1/project/{projectToken}/trace', 'api_project_trace', methods: "POST")]
	public function add(
		string $projectToken,
		Request $request,
		JsonResponseFactory $jsonResponseFactory,
		ProjectRepository $projectRepository,
		TraceRepository $traceRepository
	): \Symfony\Component\HttpFoundation\JsonResponse
	{
		$project = $projectRepository->findOneBy(
			[
				'token' => $projectToken,
			]
		);
		if ($project === null)
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$traceContent = json_decode($request->getContent(), true);
		$eventId = $traceContent['event_id'] ?? null;
		if (!is_string($eventId))
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$timestamp = $traceContent['timestamp'] ?? null;
		if (!is_int($timestamp) && !is_float($timestamp))
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$platform = $traceContent['platform'] ?? null;
		if (!is_string($platform))
		{
			return $jsonResponseFactory->createInvalidData();
		}
		$serverName = $traceContent['server_name'] ?? null;
		$modules = $traceContent['modules'] ?? null;
		$contexts = $traceContent['contexts'] ?? null;
		$exception = $traceContent['exception']['values'][0] ?? null;
		if (!is_array($exception))
		{
			return $jsonResponseFactory->createInvalidData();
		}

		$trace = new \App\Entity\Trace();
		$trace->eventId = $eventId;
		$trace->clientDate = \DateTimeImmutable::createFromFormat('U', (int)$timestamp, new \DateTimeZone('UTC'));
		$trace->createDateTime = new \DateTimeImmutable();
		$trace->platform = $platform;
		$trace->exception = $exception;
		$trace->serverName = $serverName;
		$trace->query = $contexts['query'] ?? [];
		$trace->phpVersion = $contexts['phpversion'] ?? null;
		$trace->modules = $modules;
		$trace->setProject($project);

		try
		{
			$traceRepository->save($trace);
		}
		catch (\Exception $exception)
		{
			return $jsonResponseFactory->createInvalidData();
		}

		return new JsonResponse(
			[
				'success' => true,
			]
		);
	}

	#[Route('api/v1/trace/{traceUuid}', methods: 'GET')]
	public function get(
		string $traceUuid,
		JsonResponseFactory $jsonResponseFactory
	): \Symfony\Component\HttpFoundation\JsonResponse
	{
		return $jsonResponseFactory->createNotImplemented();
	}
}