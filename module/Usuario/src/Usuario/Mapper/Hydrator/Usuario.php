<?php

namespace Usuario\Mapper\Hydrator;

class Usuario extends Hydrator
{
    protected function getEntity()
    {
        return 'Usuario\Entity\Usuario';
    }

    protected function getMap()
    {
        return array(
            'id' => 'usuario_id'
        );
    }
}
