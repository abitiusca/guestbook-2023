<?php

namespace ContainerUK3x7YP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAssets_PackagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Packages.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PackageInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Package.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/PathPackage.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/VersionStrategyInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/VersionStrategy/JsonManifestVersionStrategy.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/ContextInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/asset/Context/RequestStackContext.php';

        $a = ($container->privates['router.request_context'] ?? $container->getRouter_RequestContextService());

        return $container->privates['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\JsonManifestVersionStrategy((\dirname(__DIR__, 4).'/public/build/manifest.json'), NULL, false), new \Symfony\Component\Asset\Context\RequestStackContext(($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())), $a->getBaseUrl(), $a->isSecure())), new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0));
    }
}
