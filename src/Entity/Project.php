<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\Common\Collections\ArrayCollection;
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
	public ?string $description = null;

	#[ORM\OneToMany(mappedBy: 'project', targetEntity: Trace::class)]
	private ArrayCollection $traces;

	#[ORM\ManyToMany(targetEntity: User::class, inversedBy: 'projects')]
	private ArrayCollection $users;

	#[ORM\Column(type: Types::DATETIMETZ_IMMUTABLE, updatable: false)]
	public \DateTimeImmutable $createDateTime;

	public function __construct()
	{
		$this->traces = new ArrayCollection();
		$this->users = new ArrayCollection();
	}

	public function getId(): int
	{
		return $this->id;
	}

	public function getUsers(): ArrayCollection
	{
		return $this->users;
	}

	public function getTraces(): ArrayCollection
	{
		return $this->traces;
	}
}