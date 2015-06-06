<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Lojista\Entity\LojistaEndereco as LojistaEnderecoEntity;

class LojistaEndereco implements ServiceManagerAwareInterface
{
	public function save($data, $lojistaId)
	{
		$lojistaEnderecoEntity = new LojistaEnderecoEntity();
		$lojistaEnderecoEntity
			->setLogradouro($data['logradouro'])
			->setNumero($data['numero'])
			->setBairro($data['bairro'])
			->setCidade($data['cidade'])
			->setEstado($data['estado'])
			->setCep($data['cep'])
			->setLojistaId($lojistaId);

		return $this->getServiceManager()
			->get('Lojista\Mapper\LojistaEndereco')
			->save($lojistaEnderecoEntity);
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
