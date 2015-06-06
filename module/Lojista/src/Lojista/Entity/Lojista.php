<?php

namespace Lojista\Entity;

class Lojista
{
    private $id;
    private $razaoSocial;
    private $nomeFantasia;
    private $abertura;
    private $inscricaoEstadual;
    private $cnpj;
    private $site;
    private $email;
    private $responsavel;
    //private $endereco;
    //private $telefones;
    //private $celulares;

    /*public function setTelefone($telefone)
    {
        $this->telefones[] = $telefone;
        return $this;
    }

    public function getTelefones()
    { 
        return $this->telefones;
    }

    public function setCelulares($celulares)
    {
        $this->celulares[] = $celulares;
        return $this;
    }

    public function getCelulares()
    { 
        return $this->celulares;
    }

    public function setEndereco(Endereco $endereco)
    {
        $this->endereco = $endereco;
        return $this;
    }

    public function getEndereco()
    { 
        return $this->endereco;
    }*/

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getId()
    { 
        return $this->id;
    }

    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
        return $this;
    }

    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setNomeFantasia($nomeFantasia)
    {
        $this->nomeFantasia = $nomeFantasia;
        return $this;
    }

    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function setAbertura($abertura)
    {
        $this->abertura = $abertura;
        return $this;
    }

    public function getAbertura()
    { 
        return $this->abertura;
    }

    public function setInscricaoEstadual($inscricaoEstadual)
    {
        $this->inscricaoEstadual = $inscricaoEstadual;
        return $this;
    }

    public function getInscricaoEstadual()
    {
        return $this->inscricaoEstadual;
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

    public function setSite($site)
    {
        $this->site = $site;
        return $this;
    }

    public function getSite()
    { 
        return $this->site;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmail()
    { 
        return $this->email;
    }

    public function setResponsavel($responsavel)
    {
        $this->responsavel = $responsavel;
        return $this;
    }

    public function getResponsavel()
    { 
        return $this->responsavel;
    }
}
