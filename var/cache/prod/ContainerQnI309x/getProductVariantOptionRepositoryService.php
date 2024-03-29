<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductVariantOptionRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProductVariantOptionRepository' shared autowired service.
     *
     * @return \App\Repository\ProductVariantOptionRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProductVariantOptionRepository'] = new \App\Repository\ProductVariantOptionRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
