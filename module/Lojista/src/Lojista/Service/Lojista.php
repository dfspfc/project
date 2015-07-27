<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Lojista\Entity\Lojista as LojistaEntity;

class Lojista implements ServiceManagerAwareInterface
{
	public function getByCnpj($cnpj)
	{
		return $this->getServiceManager()
			->get('Lojista\Mapper\Lojista')
			->loadByCnpj($cnpj);
	}

	public function save($data)
	{
		$lojistaEntity = new LojistaEntity();
		$lojistaEntity
			->setRazaoSocial($data['razaoSocial'])
			->setNomeFantasia($data['nomeFantasia'])
			->setAbertura($data['abertura'])
			->setInscricaoEstadual($data['inscricaoEstadual'])
			->setCnpj($data['cnpj'])
			->setCnpj($data['responsavel'])
			->setCnpj($data['email'])
			->setCnpj($data['site']);
			
		return $this->getServiceManager()
			->get('Lojista\Mapper\Lojista')
			->save($lojistaEntity);
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
