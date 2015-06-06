<?php

namespace Lojista\Entity;

class LojistaEndereco
{
    private $id;
    private $logradouro;
    private $numero;
    private $bairro;
    private $cidade;
    private $estado;
    private $cep;
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

    public function setLogradouro($logradouro) 
    { 
         $this->logradouro = $logradouro;
         return $this;
    }

    public function getLogradouro() {
        return $this->logradouro; 
    }

    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    public function getNumero() {
        return $this->numero; 
    }

    public function setBairro($bairro) { 
        $this->bairro = $bairro;
        return $this;
    }

    public function getBairro() {
        return $this->bairro; 
    }

    public function setCidade($cidade) {
        $this->cidade = $cidade;
        return $this;
    }

    public function getCidade() {
        return $this->cidade; 
    }

    public function setEstado($estado) {
        $this->estado = $estado;
        return $this;
    }

    public function getEstado() {
        return $this->estado; 
    }

    public function setCep($cep) {
        $this->cep = $cep;
        return $this;
    }

    public function getCep() {
        return $this->cep;
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
