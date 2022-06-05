<?php

namespace ContainerEi8hAUR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInsertServiceLogCommand_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.App\Command\InsertServiceLogCommand.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.App\\Command\\InsertServiceLogCommand.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('app:insert-service-log', [], 'Insert Log in database from log.txt file', false, function () use ($container): \App\Command\InsertServiceLogCommand {
            return ($container->privates['App\\Command\\InsertServiceLogCommand'] ?? $container->load('getInsertServiceLogCommandService'));
        });
    }
}
