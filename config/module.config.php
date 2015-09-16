<?php
return array(
	'router' => array(
		'routes' => array(
			'building-form' => array(
				'type' => 'literal',
				'options' => array(
					'route' => '/building-form'
					),
				'may_terminate' => false,
				'child_routes' => array(
					'home' => array(
						'type' => 'literal',
						'options' => array(
							'route' => '/home',
							'defaults' => array(
								'controller' => 'BuildingForm\Index',
								'action' => 'index',
								)
							)
						),
					'cancel' => array(
						'type' => 'literal',
						'options' => array(
							'route' => '/cancel',
							'defaults' => array(
								'controller' => 'BuildingForm\Index',
								'action' => 'cancel',
								)
							)
						)
					),
					'complete' => array(
						'type' => 'literal',
						'options' => array(
							'route' => '/complete',
							'defaults' => array(
								'controller' => 'BuildingForm\Index',
								'action' => 'complete'
								)
							)
						)
				)
			)
		),
	'wizard' => array(
		'wizards' => array(
			'building-form-wizard' => array(
				'redirect_url' => '/building-form/complete',
				'cancel_url' => '/building-form/cancel',
				)
			)
		)
);