<?php

namespace Lojista\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;

use Lojista\Entity\LojistaEndereco as LojistaEnderecoEntity;

class LojistaEndereco extends AbstractDbMapper
{
    protected $tableName = 'lojista_endereco';

    public function save(LojistaEnderecoEntity $lojistaEnderecoEntity)
    {
    	return parent::insert($lojistaEnderecoEntity);
    }
}