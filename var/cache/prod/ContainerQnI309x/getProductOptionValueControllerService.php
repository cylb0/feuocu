<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductOptionValueControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\ProductOptionValueController' shared autowired service.
     *
     * @return \App\Controller\ProductOptionValueController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\ProductOptionValueController'] = $instance = new \App\Controller\ProductOptionValueController();

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\ProductOptionValueController', $container));

        return $instance;
    }
}