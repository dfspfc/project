<?php

namespace Lojista\Mapper\Hydrator;

class LojistaCelular extends Hydrator
{

    protected function getEntity()
    {
        return 'Lojista\Entity\LojistaCelular';
    }

    protected function getMap()
    {
        return array(
            'id' => 'lojista_celular_id'
        );
    }
}
