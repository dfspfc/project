<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Lojista\Entity\LojistaTelefone as LojistaTelefoneEntity;

class LojistaTelefone implements ServiceManagerAwareInterface
{
	public function save($data, $lojistaId)
	{
		$lojistaTelefoneEntity = new LojistaTelefoneEntity();

		foreach ($data['telefone'] as $value) {

			$lojistaTelefoneEntity
				->setTelefone($value)
				->setLojistaId($lojistaId);

			$this->getServiceManager()
				->get('Lojista\Mapper\lojistaTelefone')
				->save($lojistaTelefoneEntity);	
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
