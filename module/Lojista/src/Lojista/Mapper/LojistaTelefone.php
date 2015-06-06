<?php

namespace Lojista\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;

use Lojista\Entity\LojistaTelefone as LojistaTelefoneEntity;

class LojistaTelefone extends AbstractDbMapper
{
    protected $tableName = 'lojista_telefone';

    public function save(LojistaTelefoneEntity $lojistaTelefoneEntity)
    {
    	return parent::insert($lojistaTelefoneEntity);
    }
}