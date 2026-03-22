<?php

namespace App\Repository;

use App\Entity\Product;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

public function search(?string $query = null, ?string $categoryId = null): array
{
    $qb = $this->createQueryBuilder('p')
        ->where('p.isActive = true')
        ->orderBy('p.name', 'ASC');

    if ($query) {
        $qb->andWhere('p.name LIKE :q OR p.brand LIKE :q')
           ->setParameter('q', '%' . $query . '%');
    }

    if ($categoryId) {
        $qb->andWhere('p.category = :cat')
           ->setParameter('cat', $categoryId);
    }

    return $qb->getQuery()->getResult();
}
                    
    }
    //    /**
    //     * @return Product[] Returns an array of Product objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('p.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?Product
    //    {
    //        return $this->createQueryBuilder('p')
    //            ->andWhere('p.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }

