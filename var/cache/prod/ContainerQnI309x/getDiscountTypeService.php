<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDiscountTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\DiscountType' shared autowired service.
     *
     * @return \App\Form\DiscountType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\DiscountType'] = new \App\Form\DiscountType();
    }
}
