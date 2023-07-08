<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ProjectRepository::class)]
#[ORM\Table(name: '`app_project`')]
class Project
{
	#[ORM\Id]
	#[ORM\GeneratedValue]
	#[ORM\Column(type: Types::INTEGER)]
	private int $id;

	#[ORM\Column(type: Types::STRING, length: 50, unique: true)]
	#[Assert\Length(min: 2, max: 50)]
	public string $name;

	#[ORM\Column(type: Types::STRING, length: 36, unique: true)]
	#[Assert\Length(min: 36, max: 36)]
	public string $token;

	#[ORM\Column(type: Types::STRING, length: 200, nullable: true)]
	public string $description;

	#[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, updatable: false)]
	public \DateTimeImmutable $createDateTime;

	public function getId(): int
	{
		return $this->id;
	}
}