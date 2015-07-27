<?php

namespace Usuario\Service;

use Zend\ServiceManager\ServiceManager,
	Zend\ServiceManager\ServiceManagerAwareInterface;

use Usuario\Entity\Usuario as UsuarioEntity;
use Zend\Mail\Transport\Smtp as SmtpTransport;
use Mailer\Service\Mail;


class AtivacaoViaEmail implements ServiceManagerAwareInterface
{
	private $transport;
	private $view;

	function __construct(SmtpTransport $transport, $view)
	{
		$this->transport = $transport;
		$this->view = $view;
	}

	public function enviarEmailDeAtivacao(UsuarioEntity $usuarioEntity)
	{
		$mail = new Mail($this->transport, $this->view, 'ativacao');

		$dataEmail = array('nome' => $usuarioEntity->getNome(),'activationKey' => $usuarioEntity->getChaveDeAtivacao());

        $mail->setSubject('Confirmação de cadastro')
                ->setTo($usuarioEntity->getEmail())
                ->setData($dataEmail)
                ->prepare()
                ->send();
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