<?php

namespace Usuario\Mapper\Usuario;

use ZfcBase\Mapper\AbstractDbMapper;
use Usuario\Entity\Usuario as UsuarioEntity;

class Usuario extends AbstractDbMapper
{
	protected $tableName = 'usuario';

    public function save(UsuarioEntity $usuarioEntity)
    {
    	return parent::insert($usuarioEntity);
    }
}