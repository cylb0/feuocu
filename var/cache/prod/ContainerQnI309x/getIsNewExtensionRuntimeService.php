<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getIsNewExtensionRuntimeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Twig\Runtime\IsNewExtensionRuntime' shared autowired service.
     *
     * @return \App\Twig\Runtime\IsNewExtensionRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Twig\\Runtime\\IsNewExtensionRuntime'] = new \App\Twig\Runtime\IsNewExtensionRuntime();
    }
}
