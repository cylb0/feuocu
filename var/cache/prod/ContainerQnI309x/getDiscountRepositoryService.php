<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscountRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\DiscountRepository' shared autowired service.
     *
     * @return \App\Repository\DiscountRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\DiscountRepository'] = new \App\Repository\DiscountRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}
