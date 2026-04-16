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
    // src/Repository/ProductRepository.php
    public function search(?string $query = null, ?string $categoryId = null): array
    {
        // src/Repository/ProductRepository.php
        $qb = $this->createQueryBuilder('p')
            ->where('p.isActive = true')
            ->orderBy('CASE WHEN p.brand = \'Samsung\' THEN 0
                            WHEN p.brand = \'Apple\' THEN 1
                            ELSE 2 END', 'ASC')
            ->addOrderBy('p.name', 'ASC');

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