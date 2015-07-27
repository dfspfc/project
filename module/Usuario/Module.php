<?php

namespace Usuario;

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
                'Usuario\Service\Usuario' => 'Usuario\Service\Usuario',
            ),
            'factories' => array(
                'Usuario\Service\AtivacaoViaEmail' => 
                function ($sm) {
                    //var_dump($sm->get('View'));die;
                    return new Service\AtivacaoViaEmail(
                        $sm->get('Mailer\Mail\Transport'),
                        //$sm->get('View')
                        new \Zend\View\View()

                    );
                },
                'Usuario\Mapper\Usuario' =>
                function ($sm) {
                    $dbConfig = $sm->get('Configuration');

                    $mapper = new \Usuario\Mapper\Usuario();

                    return $mapper->setDbAdapter(
                        new \Zend\Db\Adapter\Adapter($dbConfig['db']['root'])
                    )
                    ->setEntityPrototype(
                        new \Usuario\Entity\Usuario()
                    )
                    ->setHydrator(
                        new \Usuario\Mapper\Hydrator\Usuario()
                    );
                }
            )
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
