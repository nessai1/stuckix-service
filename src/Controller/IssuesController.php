<?php

namespace App\Controller;

use App\Entity\Trace;
use App\Repository\ProjectRepository;
use App\Repository\TraceRepository;
use Symfony\Component\Routing\Annotation\Route;

class IssuesController extends \Symfony\Bundle\FrameworkBundle\Controller\AbstractController
{
	#[Route('/project/{projectToken}/issues')]
	public function getProjectIssues(
		string $projectToken,
		ProjectRepository $projectRepository,
		TraceRepository $traceRepository
	): \Symfony\Component\HttpFoundation\Response
	{
		$project = $projectRepository->findOneBy(
			[
				'token' => $projectToken,
			]
		);
		$issues = $project === null
			? null
			: $traceRepository->findBy(
				['project' => $project]
			);
		$issueInfo = [];
		foreach ($issues ?? [] as $issue)
		{
			/** @var  Trace $issue */
			$issueInfo[] = [
				'platform' => $issue->platform,
				'exception' => $issue->exception,
				'eventId' => $issue->eventId,
				'exceptionDate' => $issue->clientDate,
				'query' => $issue->query,
				'serverName' => $issue->serverName,
				'phpVersion' => $issue->phpVersion,
				'modules' => $issue->modules,
			];
		}

		return $this->render(
			'issues.html.twig',
			[
				'inlineJs' => [
					'issues' => $issueInfo,
				],
			]
		);
	}

	#[Route('/issues/{issueId}', methods: 'GET')]
	public function getIssue(
		string $issueId,
		TraceRepository $traceRepository
	): \Symfony\Component\HttpFoundation\Response
	{
		$issue = $traceRepository->findOneBy(
			[
				'eventId' => $issueId,
			]
		);
		$issueInfo = $issue === null ? null : [
			'platform' => $issue->platform,
			'exception' => $issue->exception,
			'eventId' => $issue->eventId,
			'exceptionDate' => $issue->clientDate,
			'query' => $issue->query,
			'serverName' => $issue->serverName,
			'phpVersion' => $issue->phpVersion,
			'modules' => $issue->modules,
		];

		return $this->render(
			'issue.html.twig',
			[
				'inlineJs' => [
					'issues' => $issueInfo,
				],
			]
		);
	}

}