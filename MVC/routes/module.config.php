<?php
	'hello-controller' => array(
		'type' => 'segment',
		'options' => array(
			'route'	=> '/hello[/:action]',
			'defaults' => array(
				'controller' => 'Application\Controller\Hello',
				'action'	 => 'index',
			),
		),
	),
	
	
	
	//	....
	
	
	'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController'
            , 'Application\Controller\Hello' => 'Application\Controller\HelloController'
        ),
    ),