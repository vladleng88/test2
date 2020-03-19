<?php

namespace App\Repository;

use App\Entity\TestOffer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TestOffer|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestOffer|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestOffer[]    findAll()
 * @method TestOffer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestOfferRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestOffer::class);
    }

    // /**
    //  * @return TestOffer[] Returns an array of TestOffer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?TestOffer
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
