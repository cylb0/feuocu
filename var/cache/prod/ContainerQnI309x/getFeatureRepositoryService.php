<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureRepositoryService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Repository\FeatureRepository' shared autowired service.
     *
     * @return \App\Repository\FeatureRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Repository\\FeatureRepository'] = new \App\Repository\FeatureRepository(($container->services['doctrine'] ?? $container->getDoctrineService()));
    }
}