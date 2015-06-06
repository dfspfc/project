<?php

namespace Lojista;

return array(
	'router' => array(
		'routes' =>array(
			'lojista-cadastro' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/lojista/cadastro/',
					'defaults' => array(
						'__NAMESPACE__' => 'Lojista\Controller',
						'controller' => 'Lojista',
						'action' => 'cadastro'
					)
				)
			),
			'lojista-pesquisa' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/lojista/pesquisa/',
					'defaults' => array(
						'__NAMESPACE__' => 'Lojista\Controller',
						'controller' => 'Lojista',
						'action' => 'pesquisa'
					)
				)
			)
		)
	),
	'controllers' => array(
		'invokables' => array(
			'Lojista\Controller\Lojista' => 'Lojista\Controller\LojistaController' 
		)
	),	
    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    )
);