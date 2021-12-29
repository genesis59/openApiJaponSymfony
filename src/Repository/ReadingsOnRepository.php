<?php

namespace App\Repository;

use App\Entity\ReadingsOn;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReadingsOn|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsOn|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsOn[]    findAll()
 * @method ReadingsOn[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsOnRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsOn::class);
    }

    // /**
    //  * @return ReadingsOn[] Returns an array of ReadingsOn objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('r.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ReadingsOn
    {
        return $this->createQueryBuilder('r')
            ->andWhere('r.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
