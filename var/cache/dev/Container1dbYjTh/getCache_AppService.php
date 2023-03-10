<?php

namespace Container1dbYjTh;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_AppService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\FilesystemAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['cache.app'] = $instance = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('+7u5JtKKQI', 0, ($container->targetDir.''.'/pools/app'), new \Symfony\Component\Cache\Marshaller\DefaultMarshaller(NULL, true));

        $instance->setLogger(($container->privates['logger'] ?? $container->getLoggerService()));

        return $instance;
    }
}
