<?php

return array(
    'db' => array(
        'root' => array(
            'driver'    => 'Pdo',
            'username'  => 'root',
            'password'  => 'daniel',
            'dsn'       => 'mysql:dbname=avalizza;host=localhost',
            'driver_options' => array(
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''
            )
        ),
    ),

    'service_manager' => array(
        'aliases' => array(
            'zend_db_adapter' => 'Zend\Db\Adapter\Adapter',
        ),
    ),

    'zfctwig' => array(
        'suffix' => 'html',
    ),
);
