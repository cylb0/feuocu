<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getFeatureTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\FeatureType' shared autowired service.
     *
     * @return \App\Form\FeatureType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\FeatureType'] = new \App\Form\FeatureType();
    }
}
