<?php

namespace App\Repository;

use App\Entity\Entre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;


/**
 * @method Entre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Entre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Entre[]    findAll()
 * @method Entre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EntreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Entre::class);
    }

     /**
      * @return Entre[] Returns an array of Entre objects
      */

    public function findByClassEntre(string $classe, bool $refus)
    {

        $entityManager = $this->getEntityManager();

        $query = $entityManager->createQuery(
            'SELECT e
            FROM App\Entity\Entre e
            INNER JOIN e.eleve el
            WHERE el.classe = :classe
            AND e.refus = :refus'
        )->setParameter('classe', $classe)
        ->setParameter('refus', $refus);

        return $query->getResult();

    }

    



    /*
    public function findOneBySomeField($value): ?Entre
    {
        return $this->createQueryBuilder('e')
            ->andWhere('e.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
