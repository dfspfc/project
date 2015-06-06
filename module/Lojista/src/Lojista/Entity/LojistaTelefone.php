<?php

namespace Lojista\Entity;

class LojistaTelefone
{
	private $id;
	private $telefone;
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