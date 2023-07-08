<?php

namespace App\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\Trace;

/**
 * @extends ServiceEntityRepository<Trace>
 *
 * @method Trace|null find($id, $lockMode = null, $lockVersion = null)
 * @method Trace|null findOneBy(array $criteria, array $orderBy = null)
 * @method Trace[]    findAll()
 * @method Trace[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TraceRepository extends \Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository
{
	public function __construct(
		ManagerRegistry $registry,
	) {
		parent::__construct($registry, Trace::class);
	}

	public function save(Trace $trace): void
	{
		$this->getEntityManager()->persist($trace);
		$this->getEntityManager()->flush();
	}
}