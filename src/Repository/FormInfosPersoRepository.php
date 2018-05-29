<?php

namespace App\Repository;

use App\Entity\FormInfosPerso;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method FormInfosPerso|null find($id, $lockMode = null, $lockVersion = null)
 * @method FormInfosPerso|null findOneBy(array $criteria, array $orderBy = null)
 * @method FormInfosPerso[]    findAll()
 * @method FormInfosPerso[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FormInfosPersoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FormInfosPerso::class);
    }

//    /**
//     * @return FormInfosPerso[] Returns an array of FormInfosPerso objects
//     */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?FormInfosPerso
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
