<?php

namespace ContainerCTUxp19;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getInsertServiceLogCommandService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Command\InsertServiceLogCommand' shared autowired service.
     *
     * @return \App\Command\InsertServiceLogCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'InsertServiceLogCommand.php';

        $container->privates['App\\Command\\InsertServiceLogCommand'] = $instance = new \App\Command\InsertServiceLogCommand(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));

        $instance->setName('app:insert-service-log');
        $instance->setDescription('Insert Log in database from log.txt file');

        return $instance;
    }
}