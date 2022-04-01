<?php

namespace ContainerHyPA4t3;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getConsole_Command_CachePoolListService extends App_KernelDevContainer
{
    /*
     * Gets the private 'console.command.cache_pool_list' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->privates['console.command.cache_pool_list'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolListCommand([0 => 'cache.app', 1 => 'cache.system', 2 => 'cache.validator', 3 => 'cache.serializer', 4 => 'cache.annotations', 5 => 'cache.property_info', 6 => 'cache.property_access', 7 => 'cache.validator_expression_language', 8 => 'cache.doctrine.orm.default.result', 9 => 'cache.doctrine.orm.default.query', 10 => 'cache.security_expression_language']);

        $instance->setName('cache:pool:list');
        $instance->setDescription('List available cache pools');

        return $instance;
    }
}
