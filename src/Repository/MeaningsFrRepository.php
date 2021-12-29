<?php

namespace App\Repository;

use App\Entity\MeaningsFr;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method MeaningsFr|null find($id, $lockMode = null, $lockVersion = null)
 * @method MeaningsFr|null findOneBy(array $criteria, array $orderBy = null)
 * @method MeaningsFr[]    findAll()
 * @method MeaningsFr[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class MeaningsFrRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, MeaningsFr::class);
    }

    // /**
    //  * @return MeaningsFr[] Returns an array of MeaningsFr objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('m.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?MeaningsFr
    {
        return $this->createQueryBuilder('m')
            ->andWhere('m.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
