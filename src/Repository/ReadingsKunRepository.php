<?php

namespace App\Repository;

use App\Entity\ReadingsKun;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ReadingsKun|null find($id, $lockMode = null, $lockVersion = null)
 * @method ReadingsKun|null findOneBy(array $criteria, array $orderBy = null)
 * @method ReadingsKun[]    findAll()
 * @method ReadingsKun[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ReadingsKunRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ReadingsKun::class);
    }

    // /**
    //  * @return ReadingsKun[] Returns an array of ReadingsKun objects
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
    public function findOneBySomeField($value): ?ReadingsKun
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
