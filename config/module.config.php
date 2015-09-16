<?php
return array(
	'controllers'   => array(
		'invokables' => array(
			'BuildingForm\Index' => 'BuildingForm\Controller\IndexController',
		),
	),
	'router'        => array(
		'routes' => array(
			'building-form' => array(
				'type'          => 'literal',
				'options'       => array(
					'route' => '/building-form',
				),
				'may_terminate' => false,
				'child_routes'  => array(
					'home'   => array(
						'type'    => 'literal',
						'options' => array(
							'route'    => '/home',
							'defaults' => array(
								'controller' => 'BuildingForm\Index',
								'action'     => 'index',
							),
						),
					),
					'cancel' => array(
						'type'    => 'literal',
						'options' => array(
							'route'    => '/cancel',
							'defaults' => array(
								'controller' => 'BuildingForm\Index',
								'action'     => 'cancel',
							),
						),
					),
				),
				'complete'      => array(
					'type'    => 'literal',
					'options' => array(
						'route'    => '/complete',
						'defaults' => array(
							'controller' => 'BuildingForm\Index',
							'action'     => 'complete',
						),
					),
				),
			),
		),
	),
	'wizard'        => array(
		'wizards' => array(
			'building-form-wizard' => array(
				'redirect_url' => '/building-form/complete',
				'cancel_url'   => '/building-form/cancel',
				'steps'        => array(
					'BuildingForm\Step\CustomerDetail' => array(
						'title'         => 'Customer Details',
						'view_template' => 'building-form/step/default',
						'form'          => 'BuildingForm\Form\CustomerDetail',
					),
					'BuildingForm\Step\BuildingUsage'  => array(
						'title'         => 'Building Type',
						'view_template' => 'building-form/step/default',
						'form'          => 'BuildingForm\Form\BuildingUsage',
					),
					'BuildingForm\Step\BuildingType'   => array(
						'title'         => 'Building Type',
						'view_template' => 'building-form/step/default',
						'form'          => 'BuildingForm\Form\BuildingType',
					),
					'BuildingForm\Step\BuildingSpec'   => array(
						'title'         => 'Basic Building Specifications',
						'view_template' => 'building-form/step/default',
						'form'          => 'BuildingForm\Form\BuildingSpec',
					),
					'BuildingForm\Step\BuildingBay'    => array(
						'title'         => 'Basic Building Specifications (BAYS)',
						'view_template' => 'building-form/step/default',
						'form'          => 'BuildingForm\Form\BuildingBay',
					),
				),
			),
		),
	),
	'form_elements' => array(
		'invokables' => [
			'BuildingForm\Form\BuildingBay'    => 'BuildingForm\Form\BuildingBay',
			'BuildingForm\Form\BuildingType'   => 'BuildingForm\Form\BuildingType',
			'BuildingForm\Form\BuildingUsage'  => 'BuildingForm\Form\BuildingUsage',
			'BuildingForm\Form\BuildingSpec'   => 'BuildingForm\Form\BuildingSpec',
			'BuildingForm\Form\CustomerDetail' => 'BuildingForm\Form\CustomerDetail',
		],
	),
	'wizard_steps'  => array(
		'invokables' => array(
			'BuildingForm\Step\CustomerDetail' => 'BuildingForm\DefaultStep',
			'BuildingForm\Step\BuildingSpec'   => 'BuildingForm\DefaultStep',
			'BuildingForm\Step\BuildingUsage'  => 'BuildingForm\DefaultStep',
			'BuildingForm\Step\BuildingType'   => 'BuildingForm\DefaultStep',
			'BuildingForm\Step\BuildingBay'    => 'BuildingForm\DefaultStep',
		),
	),
	'view_manager'  => array(
		'template_path_stack' => array(
			'building-form' => __DIR__ . '/../view',
		),
		'template_map'        => array(
			'wizard/layout'  => __DIR__ . '/../view/building-form/layout.phtml',
			'wizard/header'  => __DIR__ . '/../view/building-form/header.phtml',
			'wizard/buttons' => __DIR__ . '/../view/building-form/buttons.phtml',
		),
	),
);