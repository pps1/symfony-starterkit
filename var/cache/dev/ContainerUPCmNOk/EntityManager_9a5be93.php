<?php

namespace ContainerUPCmNOk;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder99c66 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializeref6c4 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties710ce = [
        
    ];

    public function getConnection()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getConnection', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getMetadataFactory', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getExpressionBuilder', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'beginTransaction', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->beginTransaction();
    }

    public function getCache()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getCache', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getCache();
    }

    public function transactional($func)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'transactional', array('func' => $func), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'wrapInTransaction', array('func' => $func), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'commit', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->commit();
    }

    public function rollback()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'rollback', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getClassMetadata', array('className' => $className), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'createQuery', array('dql' => $dql), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'createNamedQuery', array('name' => $name), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'createQueryBuilder', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'flush', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'clear', array('entityName' => $entityName), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->clear($entityName);
    }

    public function close()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'close', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->close();
    }

    public function persist($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'persist', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'remove', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'refresh', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'detach', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'merge', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getRepository', array('entityName' => $entityName), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'contains', array('entity' => $entity), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getEventManager', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getConfiguration', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'isOpen', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getUnitOfWork', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getProxyFactory', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'initializeObject', array('obj' => $obj), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'getFilters', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'isFiltersStateClean', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'hasFilters', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return $this->valueHolder99c66->hasFilters();
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

        $instance->initializeref6c4 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder99c66) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder99c66 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder99c66->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__get', ['name' => $name], $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        if (isset(self::$publicProperties710ce[$name])) {
            return $this->valueHolder99c66->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99c66;

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

        $targetObject = $this->valueHolder99c66;
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
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__set', array('name' => $name, 'value' => $value), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99c66;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder99c66;
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
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__isset', array('name' => $name), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99c66;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder99c66;
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
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__unset', array('name' => $name), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder99c66;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder99c66;
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
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__clone', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        $this->valueHolder99c66 = clone $this->valueHolder99c66;
    }

    public function __sleep()
    {
        $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, '__sleep', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;

        return array('valueHolder99c66');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializeref6c4 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializeref6c4;
    }

    public function initializeProxy() : bool
    {
        return $this->initializeref6c4 && ($this->initializeref6c4->__invoke($valueHolder99c66, $this, 'initializeProxy', array(), $this->initializeref6c4) || 1) && $this->valueHolder99c66 = $valueHolder99c66;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder99c66;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder99c66;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
