<?php

namespace ContainerB0kHoyW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTransactionControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\TransactionController' shared autowired service.
     *
     * @return \App\Controller\TransactionController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/TransactionController.php';

        $container->services['App\\Controller\\TransactionController'] = $instance = new \App\Controller\TransactionController();

        $instance->setContainer(($container->privates['.service_locator.W9y3dzm'] ?? $container->load('get_ServiceLocator_W9y3dzmService'))->withContext('App\\Controller\\TransactionController', $container));

        return $instance;
    }
}