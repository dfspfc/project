<?php

namespace Lojista\Entity;

class LojistaFornecedor
{
	private $id;
	private $telefone;
    private $cnpj;
	private $lojistaId;

	public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    { 
        return $this->id;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    public function getTelefone()
    { 
        return $this->telefone;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
        return $this;
    }

    public function getCnpj()
    { 
        return $this->cnpj;
    }

    public function setLojistaId($lojistaId)
    {
        $this->lojistaId = $lojistaId;
        return $this;
    }

    public function getLojistaId()
    { 
        return $this->lojistaId;
    }
}