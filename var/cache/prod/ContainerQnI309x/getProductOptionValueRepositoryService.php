<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductOptionValueRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\ProductOptionValueRepository' shared autowired service.
     *
     * @return \App\Repository\ProductOptionValueRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\ProductOptionValueRepository'] = new \App\Repository\ProductOptionValueRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}