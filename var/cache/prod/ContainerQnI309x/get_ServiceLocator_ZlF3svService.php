<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZlF3svService extends App_KernelProdContainer
{
    /*
     * Gets the private '.service_locator.ZlF3sv_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ZlF3sv_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'heroRepository' => ['privates', 'App\\Repository\\HeroRepository', 'getHeroRepositoryService', true],
        ], [
            'heroRepository' => 'App\\Repository\\HeroRepository',
        ]);
    }
}
