<?php

namespace Lojista\Mapper\Hydrator;

class Lojista extends Hydrator
{

    protected function getEntity()
    {
        return 'Lojista\Entity\Lojista';
    }

    protected function getMap()
    {
        return array(
            'id' => 'lojista_id'
        );
    }
}
