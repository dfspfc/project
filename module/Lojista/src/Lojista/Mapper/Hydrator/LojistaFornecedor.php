<?php

namespace Lojista\Mapper\Hydrator;

class LojistaFornecedor extends Hydrator
{

    protected function getEntity()
    {
        return 'Lojista\Entity\LojistaFornecedor';
    }

    protected function getMap()
    {
        return array(
            'id' => 'lojista_fornecedor_id'
        );
    }
}
