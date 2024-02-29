<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCartControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'App\Controller\CartController' shared autowired service.
     *
     * @return \App\Controller\CartController
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['App\\Controller\\CartController'] = $instance = new \App\Controller\CartController(new \App\Service\CartService(($container->privates['App\\Repository\\CartItemRepository'] ?? $container->load('getCartItemRepositoryService')), ($container->privates['App\\Repository\\CartRepository'] ?? $container->load('getCartRepositoryService')), ($container->privates['App\\Repository\\ProductVariantRepository'] ?? $container->load('getProductVariantRepositoryService')), ($container->services['request_stack'] ??= new \Symfony\Component\HttpFoundation\RequestStack()), ($container->privates['security.helper'] ?? $container->load('getSecurity_HelperService')), ($container->privates['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'))));

        $instance->setContainer(($container->privates['.service_locator.CshazM0'] ?? $container->load('get_ServiceLocator_CshazM0Service'))->withContext('App\\Controller\\CartController', $container));

        return $instance;
    }
}
