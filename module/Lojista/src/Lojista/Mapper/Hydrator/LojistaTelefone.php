<?php

namespace Lojista\Mapper\Hydrator;

class LojistaTelefone extends Hydrator
{

    protected function getEntity()
    {
        return 'Lojista\Entity\LojistaTelefone';
    }

    protected function getMap()
    {
        return array(
            'id' => 'lojista_telefone_id'
        );
    }
}
