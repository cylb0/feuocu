<?php

namespace App\Repository;

use App\Entity\ProductVariantOption;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductVariantOption>
 *
 * @method ProductVariantOption|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductVariantOption|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductVariantOption[]    findAll()
 * @method ProductVariantOption[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductVariantOptionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductVariantOption::class);
    }

    public function save(ProductVariantOption $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductVariantOption $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }
}
