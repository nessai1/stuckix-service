<?php

namespace App\Repository;

use App\Entity\Project;
use App\Entity\ProjectUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Project>
 *
 * @method Project|null find($id, $lockMode = null, $lockVersion = null)
 * @method Project|null findOneBy(array $criteria, array $orderBy = null)
 * @method Project[]    findAll()
 * @method Project[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProjectRepository extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository
{
	public function __construct(
		ManagerRegistry $registry,
		protected ProjectUserRepository $projectUserRepository,
	) {
		parent::__construct($registry, Project::class);
	}

	public function save(Project $project): void
	{
		$this->getEntityManager()->persist($project);
		$entityManagerUserProjects = $this->projectUserRepository->getEntityManager();
		foreach ($project->getProjectsUsers() as $projectUser)
		{
			$entityManagerUserProjects->persist($projectUser);
		}
		$entityManagerUserProjects->flush();
		$this->getEntityManager()->flush();
	}
}