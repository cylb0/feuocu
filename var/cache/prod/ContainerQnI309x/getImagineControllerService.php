<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getImagineControllerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'Liip\ImagineBundle\Controller\ImagineController' shared service.
     *
     * @return \Liip\ImagineBundle\Controller\ImagineController
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['Liip\\ImagineBundle\\Controller\\ImagineController'] = new \Liip\ImagineBundle\Controller\ImagineController(($container->privates['liip_imagine.service.filter'] ?? $container->load('getLiipImagine_Service_FilterService')), ($container->services['liip_imagine.data.manager'] ?? $container->load('getLiipImagine_Data_ManagerService')), ($container->services['liip_imagine.cache.signer'] ??= new \Liip\ImagineBundle\Imagine\Cache\Signer($container->getEnv('APP_SECRET'))), new \Liip\ImagineBundle\Config\Controller\ControllerConfig(302));
    }
}
