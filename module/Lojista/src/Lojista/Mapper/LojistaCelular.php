<?php

namespace Lojista\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;
use Lojista\Entity\LojistaCelular as LojistaCelularEntity;

class LojistaCelular extends AbstractDbMapper
{
    protected $tableName = 'lojista_celular';

    public function save(LojistaCelularEntity $lojistaCelularEntity)
    {
    	return parent::insert($lojistaCelularEntity);
    }
}