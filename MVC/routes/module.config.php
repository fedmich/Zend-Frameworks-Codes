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