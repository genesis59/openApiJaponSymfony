<?php

namespace App\Repository;

use App\Entity\KeyKanji;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method KeyKanji|null find($id, $lockMode = null, $lockVersion = null)
 * @method KeyKanji|null findOneBy(array $criteria, array $orderBy = null)
 * @method KeyKanji[]    findAll()
 * @method KeyKanji[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class KeyKanjiRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, KeyKanji::class);
    }

    // /**
    //  * @return KeyKanji[] Returns an array of KeyKanji objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('k.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?KeyKanji
    {
        return $this->createQueryBuilder('k')
            ->andWhere('k.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
