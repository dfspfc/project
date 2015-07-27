<?php

namespace Usuario\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Usuario\Entity\Usuario as UsuarioEntity;

class Usuario implements ServiceManagerAwareInterface
{
	public function save($data)
	{
		$usuarioEntity = new UsuarioEntity($data);
		$usuarioEntity->setChaveDeAtivacao(
			$this->createActivationKey($usuarioEntity)
		);

		return $this->getServiceManager()
			->get('Usuario\Mapper\Usuario')
			->save($usuarioEntity);
	}

	public function createActivationKey(UsuarioEntity $usuarioEntity)
	{
		return md5($usuarioEntity->getEmail() . $usuarioEntity->getSalt());
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