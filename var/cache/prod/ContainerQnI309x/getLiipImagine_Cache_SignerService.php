<?php

namespace ContainerQnI309x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLiipImagine_Cache_SignerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'liip_imagine.cache.signer' shared service.
     *
     * @return \Liip\ImagineBundle\Imagine\Cache\Signer
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($container->getEnv('APP_SECRET'));
    }
}
