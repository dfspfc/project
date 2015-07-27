<?php

namespace Usuario\Entity;

use Zend\Math\Rand,
    Zend\Crypt\Key\Derivation\Pbkdf2;

use Zend\Stdlib\Hydrator;

class Usuario
{
	private $id;
    private $nome;
	private $login;
	private $senha;
	private $email;
	private $salt;
	private $ativo;
	private $chaveDeAtivacao;
	private $dataCriacao;
	private $dataAtualizacao;

    public function __construct($data = false)
    {
        if($data) {
            $this->setAttributesByData($data);
        }
        $this->salt = base64_encode(Rand::getBytes(8, true));
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
		return $this;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    public function getLogin()
    {
        return $this->login;
    }

    public function setLogin($login)
    {
        $this->login = $login;
		return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $this->encriptSenha($senha);
		return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
		return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
		return $this;
    }

    public function getAtivo()
    {
        return $this->ativo;
    }

    public function setAtivo($ativo)
    {
        $this->ativo = $ativo;
		return $this;
    }

    public function getChaveDeAtivacao()
    {
        return $this->chaveDeAtivacao;
    }

    public function setChaveDeAtivacao($chaveDeAtivacao)
    {
        $this->chaveDeAtivacao = $chaveDeAtivacao;
		return $this;
    }

    public function getDataCriacao()
    {
        return $this->dataCriacao;
    }

    public function setDataCriacao($dataCriacao)
    {
        $this->dataCriacao = $dataCriacao;
		return $this;
    }

    public function getDataAtualizacao()
    {
        return $this->dataAtualizacao;
    }

    public function setDataAtualizacao($dataAtualizacao)
    {
        $this->dataAtualizacao = $dataAtualizacao;
		return $this;
    }

    private function setAttributesByData($data)
    {
        (new Hydrator\ClassMethods)->hydrate($data, $this);
    }

    private function encriptSenha($senha)
    {
        return base64_encode(
            Pbkdf2::calc('sha256', $senha, $this->salt, 10000, strlen($senha * 2))
        );
    }
}