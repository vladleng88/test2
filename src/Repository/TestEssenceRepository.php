<?php

namespace App\Repository;

use App\Entity\TestEssence;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method TestEssence|null find($id, $lockMode = null, $lockVersion = null)
 * @method TestEssence|null findOneBy(array $criteria, array $orderBy = null)
 * @method TestEssence[]    findAll()
 * @method TestEssence[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TestEssenceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, TestEssence::class);
    }

    // /**
    //  * @return TestEssence[] Returns an array of TestEssence objects
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
    public function findOneBySomeField($value): ?TestEssence
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
