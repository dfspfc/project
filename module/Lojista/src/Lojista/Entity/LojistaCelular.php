<?php

namespace Lojista\Entity;

class LojistaCelular
{
	private $id;
	private $celular;
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

    public function setCelular($celular)
    {
        $this->celular = $celular;
        return $this;
    }

    public function getCelular()
    { 
        return $this->celular;
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