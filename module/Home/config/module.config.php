<?php

namespace Home;

return array(
	'router' => array(
		'routes' =>array(
			'home' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/home/',
					'defaults' => array(
						'__NAMESPACE__' => 'Home\Controller',
						'controller' => 'Home',
						'action' => 'index'
					)
				)
			),
			'sobre' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/sobre/',
					'defaults' => array(
						'__NAMESPACE__' => 'Home\Controller',
						'controller' => 'Home',
						'action' => 'sobre'
					)
				)
			),
			'contato' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/contato/',
					'defaults' => array(
						'__NAMESPACE__' => 'Home\Controller',
						'controller' => 'Home',
						'action' => 'contato'
					)
				)
			),
			'servicos' => array(
				'type' => 'Literal',
				'options' => array(
					'route' => '/servicos/',
					'defaults' => array(
						'__NAMESPACE__' => 'Home\Controller',
						'controller' => 'Home',
						'action' => 'servicos'
					)
				)
			)
		)
	),
	'controllers' => array(
		'invokables' => array(
			'Home\Controller\Home' => 'Home\Controller\HomeController' 
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