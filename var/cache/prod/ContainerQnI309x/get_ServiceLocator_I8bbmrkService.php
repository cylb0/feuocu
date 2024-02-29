<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_I8bbmrkService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.i8bbmrk' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.i8bbmrk'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartItemRepository' => ['privates', 'App\\Repository\\CartItemRepository', 'getCartItemRepositoryService', true],
            'cartRepository' => ['privates', 'App\\Repository\\CartRepository', 'getCartRepositoryService', true],
            'productVariantRepository' => ['privates', 'App\\Repository\\ProductVariantRepository', 'getProductVariantRepositoryService', true],
        ], [
            'cartItemRepository' => 'App\\Repository\\CartItemRepository',
            'cartRepository' => 'App\\Repository\\CartRepository',
            'productVariantRepository' => 'App\\Repository\\ProductVariantRepository',
        ]);
    }
}