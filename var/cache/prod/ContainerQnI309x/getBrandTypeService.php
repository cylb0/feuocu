<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBrandTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\BrandType' shared autowired service.
     *
     * @return \App\Form\BrandType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\BrandType'] = new \App\Form\BrandType();
    }
}
