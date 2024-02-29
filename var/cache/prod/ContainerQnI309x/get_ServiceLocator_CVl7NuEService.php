<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CVl7NuEService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.CVl7NuE' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CVl7NuE'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'brandRepository' => ['privates', 'App\\Repository\\BrandRepository', 'getBrandRepositoryService', true],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
        ], [
            'brandRepository' => 'App\\Repository\\BrandRepository',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
