<?php

namespace ContainerUK3x7YP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VRIdtPxService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.vRIdtPx' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.vRIdtPx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\GuestbookController::approve' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController::delete' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController::edit' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController::index' => ['privates', '.service_locator.qtuDeFN', 'get_ServiceLocator_QtuDeFNService', true],
            'App\\Controller\\GuestbookController::new' => ['privates', '.service_locator.sexyjcZ', 'get_ServiceLocator_SexyjcZService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Security\\AccessDeniedHandler::handle' => ['privates', '.service_locator.O7Rd0qR', 'get_ServiceLocator_O7Rd0qRService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'App\\Controller\\GuestbookController:approve' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController:delete' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController:edit' => ['privates', '.service_locator.qDzC5l2', 'get_ServiceLocator_QDzC5l2Service', true],
            'App\\Controller\\GuestbookController:index' => ['privates', '.service_locator.qtuDeFN', 'get_ServiceLocator_QtuDeFNService', true],
            'App\\Controller\\GuestbookController:new' => ['privates', '.service_locator.sexyjcZ', 'get_ServiceLocator_SexyjcZService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.YU8H6ve', 'get_ServiceLocator_YU8H6veService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.zFcJjKU', 'get_ServiceLocator_ZFcJjKUService', true],
            'App\\Security\\AccessDeniedHandler:handle' => ['privates', '.service_locator.O7Rd0qR', 'get_ServiceLocator_O7Rd0qRService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.xUrKPVU', 'get_ServiceLocator_XUrKPVUService', true],
        ], [
            'App\\Controller\\GuestbookController::approve' => '?',
            'App\\Controller\\GuestbookController::delete' => '?',
            'App\\Controller\\GuestbookController::edit' => '?',
            'App\\Controller\\GuestbookController::index' => '?',
            'App\\Controller\\GuestbookController::new' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Security\\AccessDeniedHandler::handle' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\GuestbookController:approve' => '?',
            'App\\Controller\\GuestbookController:delete' => '?',
            'App\\Controller\\GuestbookController:edit' => '?',
            'App\\Controller\\GuestbookController:index' => '?',
            'App\\Controller\\GuestbookController:new' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Security\\AccessDeniedHandler:handle' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
