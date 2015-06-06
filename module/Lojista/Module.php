<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Lojista;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $eventManager        = $e->getApplication()->getEventManager();
        $moduleRouteListener = new ModuleRouteListener();
        $moduleRouteListener->attach($eventManager);
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'invokables' => array(
                'Lojista\Service\Lojista' => 'Lojista\Service\Lojista',
                'Lojista\Service\LojistaEndereco' => 'Lojista\Service\LojistaEndereco',
                'Lojista\Service\LojistaTelefone' => 'Lojista\Service\LojistaTelefone',
                'Lojista\Service\LojistaCelular' => 'Lojista\Service\LojistaCelular         ',
                'Lojista\Service\FlashMessenger' => 'Lojista\Service\FlashMessenger'
            ),
            'factories' => array(
                'Lojista\Mapper\Lojista' =>
                function ($sm) {
                    $dbConfig = $sm->get('Configuration');

                    $mapper = new \Lojista\Mapper\Lojista();

                    return $mapper->setDbAdapter(
                        new \Zend\Db\Adapter\Adapter($dbConfig['db']['root'])
                    )
                    ->setEntityPrototype(
                        new \Lojista\Entity\Lojista()
                    )
                    ->setHydrator(
                        new \Lojista\Mapper\Hydrator\Lojista()
                    );
                },
                'Lojista\Mapper\LojistaEndereco' =>
                function ($sm) {
                    $dbConfig = $sm->get('Configuration');
                    
                    $mapper = new \Lojista\Mapper\LojistaEndereco();

                    return $mapper->setDbAdapter(
                        new \Zend\Db\Adapter\Adapter($dbConfig['db']['root'])
                    )
                    ->setEntityPrototype(
                        new \Lojista\Entity\LojistaEndereco()
                    )
                    ->setHydrator(
                        new \Lojista\Mapper\Hydrator\LojistaEndereco()
                    );
                },
                'Lojista\Mapper\LojistaTelefone' =>
                function ($sm) {
                    $dbConfig = $sm->get('Configuration');
                    
                    $mapper = new \Lojista\Mapper\LojistaTelefone();

                    return $mapper->setDbAdapter(
                        new \Zend\Db\Adapter\Adapter($dbConfig['db']['root'])
                    )
                    ->setEntityPrototype(
                        new \Lojista\Entity\LojistaTelefone()
                    )
                    ->setHydrator(
                        new \Lojista\Mapper\Hydrator\LojistaTelefone()
                    );
                },
                'Lojista\Mapper\LojistaCelular' =>
                function ($sm) {
                    $dbConfig = $sm->get('Configuration');
                    
                    $mapper = new \Lojista\Mapper\LojistaCelular();

                    return $mapper->setDbAdapter(
                        new \Zend\Db\Adapter\Adapter($dbConfig['db']['root'])
                    )
                    ->setEntityPrototype(
                        new \Lojista\Entity\LojistaCelular()
                    )
                    ->setHydrator(
                        new \Lojista\Mapper\Hydrator\LojistaCelular()
                    );
                }
            ),
        );
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
