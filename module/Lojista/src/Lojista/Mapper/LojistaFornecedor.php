<?php

namespace Lojista\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;

use Lojista\Entity\LojistaFornecedor as LojistaFornecedorEntity;

class LojistaFornecedor extends AbstractDbMapper
{
    protected $tableName = 'lojista_fornecedor';

    public function save(LojistaFornecedorEntity $lojistaFornecedorEntity)
    {
    	return parent::insert($lojistaFornecedorEntity);
    }
}