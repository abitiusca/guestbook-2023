<?php

namespace ContainerAQVXoUo;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_O7Rd0qRService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.O7Rd0qR' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.O7Rd0qR'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'accessDeniedException' => ['privates', '.errored..service_locator.O7Rd0qR.Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException', NULL, 'Cannot autowire service ".service_locator.O7Rd0qR": it references class "Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException" but no such service exists.'],
        ], [
            'accessDeniedException' => 'Symfony\\Component\\Security\\Core\\Exception\\AccessDeniedException',
        ]);
    }
}
