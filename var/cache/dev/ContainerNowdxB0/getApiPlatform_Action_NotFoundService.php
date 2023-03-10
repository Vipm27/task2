<?php

namespace ContainerNowdxB0;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Action_NotFoundService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'api_platform.action.not_found' shared service.
     *
     * @return \ApiPlatform\Action\NotFoundAction
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->services['api_platform.action.not_found'] = new \ApiPlatform\Action\NotFoundAction();
    }
}
