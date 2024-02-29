<?php

namespace App\Repository;

use App\Entity\Brand;
use App\Entity\Category;
use App\Entity\Product;
use App\Entity\ProductVariant;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 *
 * @method Product|null find($id, $lockMode = null, $lockVersion = null)
 * @method Product|null findOneBy(array $criteria, array $orderBy = null)
 * @method Product[]    findAll()
 * @method Product[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    public function save(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Product $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function findCategoryAndSubCategories(Category $category): array
    {
        $products = [];
        $products = array_merge($products, $this->findBy(['category' => $category]));
        foreach ($category->getChildren() as $child)
        {
            $products = array_merge($products, $this->findCategoryAndSubCategories($child));
        }

        return array_filter($products, function ($product) {
            return count($product->getProductVariants()) > 0;
        });
    }

    public function findCategoryAndSubCategoriesSortByRating(Category $category): array
    {
        $products = $this->findCategoryAndSubCategories($category);

        usort($products, function ($a, $b) {
           return $b->getRating() <=> $a->getRating();
        });

        return $products;
    }

    public function findCategoryAndSubCategoriesSortByPriceAscending(Category $category): array
    {
        $products = $this->findCategoryAndSubCategories($category);

        usort($products, function ($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });

        return $products;
    }

    public function findCategoryAndSubCategoriesSortByPriceDescending(Category $category): array
    {
        $products = $this->findCategoryAndSubCategories($category);

        return array_reverse($products);
    }
    public function sortBrandByRating(Brand $brand): array
    {
//        On cast la collection en tableau
        $products = $brand->getProducts()->toArray();

        usort($products, function ($a, $b) {
            return $b->getRating() <=> $a->getRating();
        });

        return $products;
    }

    public function sortBrandByPriceAscending(Brand $brand): array
    {
        $products = $brand->getProducts()->toArray();

        usort($products, function($a, $b) {
            return $a->getPrice() <=> $b->getPrice();
        });
        return $products;
    }

    public function sortBrandByPriceDescending(Brand $brand): array
    {
        $products = $this->sortBrandByPriceAscending($brand);
        return array_reverse($products);
    }

    public function search(string $query): array
    {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('p')
            ->from(Product::class, 'p')
            ->leftJoin(Category::class, 'c', 'WITH', 'c.id = p.category')
            ->leftJoin(Brand::class, 'b', 'WITH', 'b.id = p.brand')
            ->where($queryBuilder->expr()->orX(
                $queryBuilder->expr()->like('p.name', ':query'),
                $queryBuilder->expr()->like('c.name', ':query'),
                $queryBuilder->expr()->like('b.name', ':query')
            ))
            ->setParameter('query', '%' . $query . '%');

        return $queryBuilder->getQuery()->getResult();
    }

    public function getAvailableVariants(Product $product): array {
        $queryBuilder = $this->getEntityManager()->createQueryBuilder();
        $queryBuilder->select('pv')
            ->from(ProductVariant::class, 'pv')
            ->where('pv.product = :prod')
            ->andWhere('pv.stock > 0')
            ->setParameter('prod', $product->getId());

        return $queryBuilder->getQuery()->getResult();
    }
}
