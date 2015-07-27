<?php
namespace UsuarioTest\Service;

use PHPUnit_Framework_TestCase;
use Usuario\Entity\Usuario as UsuarioEntity;
use Usuario\Service\Usuario as UsuarioService;

class UsuarioTest extends PHPUnit_Framework_TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(
            'Usuario\Service\Usuario',
            new UsuarioService()
        );
    }

    public function testCreateActivationKeyShouldCreateAnActivationKey()
    {
        $usuarioEntity = new UsuarioEntity(
            array('email' => 'mymail')
        );

    	$chaveDeAtivacao = (new UsuarioService())->createActivationKey($usuarioEntity);
        $usuarioEntity->setChaveDeAtivacao($chaveDeAtivacao);

        $toCompare = md5($usuarioEntity->getEmail() . $usuarioEntity->getSalt());

        $this->assertEquals($toCompare, $usuarioEntity->getChaveDeAtivacao());
    }
}