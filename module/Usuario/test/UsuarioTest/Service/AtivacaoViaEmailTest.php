<?php
namespace UsuarioTest\Service;

use PHPUnit_Framework_TestCase;
use UsuarioTest\Bootstrap;
use Usuario\Entity\Usuario as UsuarioEntity;

class AtivacaoViaEmailTest extends PHPUnit_Framework_TestCase
{
    private $usuarioService;
    private $ativacaoViaEmailService;

    public function setUp()
    {
        Bootstrap::init();
        $this->usuarioService = Bootstrap::getServiceManager()->get('Usuario\Service\Usuario');
        $this->ativacaoViaEmailService = Bootstrap::getServiceManager()->get('Usuario\Service\AtivacaoViaEmail');

    }

    public function testClassExists()
    {
        $this->assertInstanceOf(
            'Usuario\Service\AtivacaoViaEmail',
            Bootstrap::getServiceManager()->get('Usuario\Service\AtivacaoViaEmail')
        );
    }

    public function testCreateActivationKeyShouldCreateAnActivationKey()
    {
        $usuarioEntity = new UsuarioEntity(
            array('email' => 'mymail')
        );

    	$chaveDeAtivacao = $this->usuarioService->createActivationKey($usuarioEntity);
        $usuarioEntity->setChaveDeAtivacao($chaveDeAtivacao);

        $toCompare = md5($usuarioEntity->getEmail() . $usuarioEntity->getSalt());

        $this->assertEquals($toCompare, $usuarioEntity->getChaveDeAtivacao());
    }

    public function testSendEmail()
    {
        $usuarioEntity = new UsuarioEntity(
            array(
                'email' => 'da.ferreiraalves@gmail.com',
                'nome' => 'Daniel',
                'senha' => 'mypass'
            )
        );

        $ativacaoViaEmailService = $this->ativacaoViaEmailService;
        $ativacaoViaEmailService->enviarEmailDeAtivacao($usuarioEntity);
    }
}