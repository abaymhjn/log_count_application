<?php

namespace ContainerEi8hAUR;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder56719 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializered8eb = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties3d5cd = [
        
    ];

    public function getConnection()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getConnection', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getMetadataFactory', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getExpressionBuilder', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'beginTransaction', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->beginTransaction();
    }

    public function getCache()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getCache', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getCache();
    }

    public function transactional($func)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'transactional', array('func' => $func), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'wrapInTransaction', array('func' => $func), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'commit', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->commit();
    }

    public function rollback()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'rollback', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getClassMetadata', array('className' => $className), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'createQuery', array('dql' => $dql), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'createNamedQuery', array('name' => $name), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'createQueryBuilder', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'flush', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'clear', array('entityName' => $entityName), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->clear($entityName);
    }

    public function close()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'close', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->close();
    }

    public function persist($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'persist', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'remove', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'refresh', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'detach', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'merge', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getRepository', array('entityName' => $entityName), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'contains', array('entity' => $entity), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getEventManager', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getConfiguration', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'isOpen', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getUnitOfWork', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getProxyFactory', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'initializeObject', array('obj' => $obj), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'getFilters', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'isFiltersStateClean', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'hasFilters', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return $this->valueHolder56719->hasFilters();
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

        $instance->initializered8eb = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder56719) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder56719 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder56719->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__get', ['name' => $name], $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        if (isset(self::$publicProperties3d5cd[$name])) {
            return $this->valueHolder56719->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56719;

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

        $targetObject = $this->valueHolder56719;
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
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__set', array('name' => $name, 'value' => $value), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56719;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder56719;
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
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__isset', array('name' => $name), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56719;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder56719;
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
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__unset', array('name' => $name), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder56719;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder56719;
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
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__clone', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        $this->valueHolder56719 = clone $this->valueHolder56719;
    }

    public function __sleep()
    {
        $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, '__sleep', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;

        return array('valueHolder56719');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializered8eb = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializered8eb;
    }

    public function initializeProxy() : bool
    {
        return $this->initializered8eb && ($this->initializered8eb->__invoke($valueHolder56719, $this, 'initializeProxy', array(), $this->initializered8eb) || 1) && $this->valueHolder56719 = $valueHolder56719;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder56719;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder56719;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
