<?php

namespace ContainerSEFUwlw;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderf6d08 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer11d89 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties9c9a3 = [
        
    ];

    public function getConnection()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getConnection', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getMetadataFactory', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getExpressionBuilder', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'beginTransaction', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getCache', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getCache();
    }

    public function transactional($func)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'transactional', array('func' => $func), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'wrapInTransaction', array('func' => $func), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'commit', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->commit();
    }

    public function rollback()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'rollback', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getClassMetadata', array('className' => $className), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'createQuery', array('dql' => $dql), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'createNamedQuery', array('name' => $name), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'createQueryBuilder', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'flush', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'clear', array('entityName' => $entityName), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->clear($entityName);
    }

    public function close()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'close', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->close();
    }

    public function persist($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'persist', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'remove', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'refresh', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'detach', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'merge', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getRepository', array('entityName' => $entityName), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'contains', array('entity' => $entity), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getEventManager', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getConfiguration', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'isOpen', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getUnitOfWork', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getProxyFactory', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'initializeObject', array('obj' => $obj), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'getFilters', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'isFiltersStateClean', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'hasFilters', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return $this->valueHolderf6d08->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer11d89 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderf6d08) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderf6d08 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderf6d08->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__get', ['name' => $name], $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        if (isset(self::$publicProperties9c9a3[$name])) {
            return $this->valueHolderf6d08->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6d08;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf6d08;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6d08;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderf6d08;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__isset', array('name' => $name), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6d08;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderf6d08;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__unset', array('name' => $name), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderf6d08;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderf6d08;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__clone', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        $this->valueHolderf6d08 = clone $this->valueHolderf6d08;
    }

    public function __sleep()
    {
        $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, '__sleep', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;

        return array('valueHolderf6d08');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer11d89 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer11d89;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer11d89 && ($this->initializer11d89->__invoke($valueHolderf6d08, $this, 'initializeProxy', array(), $this->initializer11d89) || 1) && $this->valueHolderf6d08 = $valueHolderf6d08;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderf6d08;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderf6d08;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
