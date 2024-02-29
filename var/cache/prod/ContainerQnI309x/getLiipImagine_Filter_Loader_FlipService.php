<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Filter_Loader_FlipService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.filter.loader.flip' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['liip_imagine.filter.loader.flip'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\FlipFilterLoader();
    }
}
