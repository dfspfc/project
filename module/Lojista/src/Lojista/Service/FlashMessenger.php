<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

class FlashMessenger implements ServiceManagerAwareInterface
{
	public function addMessage($controller, $namespace, $message)
    {
        $controller->flashMessenger()
            ->setNamespace($namespace)
            ->addMessage($message);
    }

    public function getMessages($controller, $namespace)
    {
         return $controller->flashMessenger()
            ->setNamespace($namespace)
            ->getMessages();
    }

    public function getServiceManager()
    {
        return $this->serviceManager;
    }

    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->serviceManager = $serviceManager;
        return $this;
    }
}
