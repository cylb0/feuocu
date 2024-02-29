<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_B8bccYZService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.b8bccYZ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.b8bccYZ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'discountRepository' => ['privates', 'App\\Repository\\DiscountRepository', 'getDiscountRepositoryService', true],
        ], [
            'discountRepository' => 'App\\Repository\\DiscountRepository',
        ]);
    }
}