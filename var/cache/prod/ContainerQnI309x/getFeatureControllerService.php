<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\FeatureController' shared autowired service.
     *
     * @return \App\Controller\FeatureController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\FeatureController'] = $instance = new \App\Controller\FeatureController(new \App\Service\FeatureService(($container->privates['App\\Repository\\FeatureRepository'] ?? $container->load('getFeatureRepositoryService')), ($container->privates['parameter_bag'] ??= new \Symfony\Component\DependencyInjection\ParameterBag\ContainerBag($container)), ($container->privates['Cocur\\Slugify\\Slugify'] ??= new \Cocur\Slugify\Slugify())));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\FeatureController', $container));

        return $instance;
    }
}