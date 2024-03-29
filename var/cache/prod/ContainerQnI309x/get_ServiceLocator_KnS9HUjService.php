<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KnS9HUjService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.KnS9HUj' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KnS9HUj'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'discount' => ['privates', '.errored..service_locator.KnS9HUj.App\\Entity\\Discount', NULL, 'Cannot autowire service ".service_locator.KnS9HUj": it needs an instance of "App\\Entity\\Discount" but this type has been excluded in "config/services.yaml".'],
            'discountRepository' => ['privates', 'App\\Repository\\DiscountRepository', 'getDiscountRepositoryService', true],
        ], [
            'discount' => 'App\\Entity\\Discount',
            'discountRepository' => 'App\\Repository\\DiscountRepository',
        ]);
    }
}
