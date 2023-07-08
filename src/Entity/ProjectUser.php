<?php

namespace App\Entity;

use App\Repository\ProjectUserRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProjectUserRepository::class)]
class ProjectUser
{
	#[ORM\Id]
	#[ORM\ManyToOne(inversedBy: 'project')]
	private Project $project;

	#[ORM\Id]
	#[ORM\ManyToOne(inversedBy: 'user')]
	private User $user;

	#[ORM\Column(type: Types::STRING, length: 500, nullable: true)]
	private ?string $path = null;

	public function getUser(): ?User
	{
		return $this->user;
	}

	public function setUser(?User $user): static
	{
		$this->user = $user;

		return $this;
	}

	public function getProject(): ?Project
	{
		return $this->project;
	}

	public function setProject(?Project $project): static
	{
		$this->project = $project;

		return $this;
	}

	public function getPath(): ?string
	{
		return $this->path;
	}

	public function setPath(?string $path): static
	{
		$this->path = $path;

		return $this;
	}


}
