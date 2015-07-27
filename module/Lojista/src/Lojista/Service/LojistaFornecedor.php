<?php
namespace Lojista\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Lojista\Entity\LojistaFornecedor as LojistaFornecedorEntity;

class LojistaFornecedor implements ServiceManagerAwareInterface
{
	public function save($data, $lojistaId)
	{
		$lojistaFornecedorEntity = new LojistaFornecedorEntity();

		for($contador=1;$contador<=5;$contador++) {
			$lojistaFornecedorEntity
				->setTelefone($data['fornecedor' . $contador])
				->setCnpj($data['telefoneFornecedor' . $contador])
				->setLojistaId($lojistaId);

			$this->getServiceManager()
				->get('Lojista\Mapper\LojistaFornecedor')
				->save($lojistaFornecedorEntity);
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
