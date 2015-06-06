<?php

namespace Lojista\Mapper;

use ZfcBase\Mapper\AbstractDbMapper;

use Lojista\Entity\Lojista as LojistaEntity;

class Lojista extends AbstractDbMapper
{
    protected $tableName = 'lojista';

    public function save(LojistaEntity $lojistaEntity)
    {
    	return parent::insert($lojistaEntity);
    }

    public function loadByCnpj($cnpj)
    {
        $select = $this->getSelect(array('e' => $this->tableName))
            ->where(array('e.cnpj' => $cnpj));
       
        return $this->select($select)->current();
    }
}