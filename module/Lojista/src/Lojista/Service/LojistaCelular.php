<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Lojista\Entity\LojistaCelular as LojistaCelularEntity;

class LojistaCelular implements ServiceManagerAwareInterface
{
	public function save($data, $lojistaId)
	{
		$lojistaCelularEntity = new LojistaCelularEntity();

		foreach ($data['celular'] as $value) {

			$lojistaCelularEntity
				->setCelular($value)
				->setLojistaId($lojistaId);

			$this->getServiceManager()
				->get('Lojista\Mapper\LojistaCelular')
				->save($lojistaCelularEntity);	
		}
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
