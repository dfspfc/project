<?php

namespace Lojista\Mapper\Hydrator;

class LojistaEndereco extends Hydrator
{

    protected function getEntity()
    {
        return 'Lojista\Entity\LojistaEndereco';
    }

    protected function getMap()
    {
        return array(
            'id' => 'lojista_endereco_id'
        );
    }
}
