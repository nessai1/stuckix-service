<?php

namespace App\Entity;

use App\Repository\TraceRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: TraceRepository::class)]
#[ORM\Table(name: '`app_trace`')]
class Trace
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private int $id;

	#[ORM\Column(type: Types::JSON, nullable: false)]
	public array $exception = [];

	#[ORM\Column(type: Types::JSON, nullable: true)]
	public ?array $modules = null;
	#[ORM\Column(type: Types::JSON, nullable: true)]
	public ?array $query = null;
	#[ORM\Column(type: Types::STRING, length: 255, nullable: true, updatable: false)]
	public ?string $serverName = null;
	#[ORM\Column(type: Types::STRING, length: 50, nullable: true, updatable: false)]
	public ?string $phpVersion = null;

	#[ORM\ManyToOne(targetEntity: Project::class, inversedBy: 'traces')]
	private Project $project;

	#[ORM\Column(type: Types::STRING, length: 25, updatable: false)]
	public string $platform;

	#[ORM\Column(type: Types::STRING, length: 36, unique: true)]
	#[Assert\Length(min: 36, max: 36)]
	public string $eventId;

	#[ORM\Column(type: Types::STRING, length: 36, enumType: TraceStatus::class, options: ["default" => TraceStatus::NEW])]
	public TraceStatus $status = TraceStatus::NEW;

	#[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, updatable: false)]
	public \DateTimeImmutable $createDateTime;

	#[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, updatable: false)]
	public \DateTimeImmutable $clientDate;

	public function getId(): int
	{
		return $this->id;
	}

	public function getProject(): Project
	{
		return $this->project;
	}

	public function setProject(Project $project): void
	{
		$this->project = $project;
	}
}