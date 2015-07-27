<?php
namespace UsuarioTest\Entity;

use Zend\Db\ResultSet\ResultSet;
use PHPUnit_Framework_TestCase;
use Usuario\Entity\Usuario as UsuarioEntity;

class UsuarioTest extends PHPUnit_Framework_TestCase
{
    public function testClassExists()
    {
        $this->assertInstanceOf(
            'Usuario\Entity\Usuario',
            new UsuarioEntity()
        );
    }

    public function testInstantiationWithDataShouldSetAttributesForUsuarioEntity()
    {
    	$data = array(
    		'login' => 'mylogin',
    		'senha' => 'mypassword',
    		'email' => 'mymail'
		);

    	$usuarioEntity = new UsuarioEntity($data);

    	$this->assertEquals($data['login'], $usuarioEntity->getLogin());
    	$this->assertNotEmpty($usuarioEntity->getSenha());
    	$this->assertEquals($data['email'], $usuarioEntity->getEmail());
    }

    public function testSaltShouldBeSettedWhenInstantiatingUsuarioEntity()
    {
    	$usuarioEntity = new UsuarioEntity();
    	$this->assertNotEmpty($usuarioEntity->getSalt());
    }

    public function testSetsenhaShouldReturnSomethingDifferentFromWhatWasSetted()
    {
    	$usuarioEntity = new UsuarioEntity();
    	$usuarioEntity->setSenha('mypassword');

    	$this->assertNotEmpty($usuarioEntity->getSenha());
    	$this->assertNotEquals('mypassword', $usuarioEntity->getSenha());
    }
}