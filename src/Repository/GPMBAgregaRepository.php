<?php

namespace App\Repository;

use App\Entity\GPMBAgrega;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method GPMBAgrega|null find($id, $lockMode = null, $lockVersion = null)
 * @method GPMBAgrega|null findOneBy(array $criteria, array $orderBy = null)
 * @method GPMBAgrega[]    findAll()
 * @method GPMBAgrega[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class GPMBAgregaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, GPMBAgrega::class);
    }

    // /**
    //  * @return GPMBAgrega[] Returns an array of GPMBAgrega objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('g.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?GPMBAgrega
    {
        return $this->createQueryBuilder('g')
            ->andWhere('g.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
