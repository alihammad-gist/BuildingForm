<?php

namespace BuildingForm\Form;

use Zend\Form\Form;

class BuildingBay extends Form {

	public function __construct() {
		parent::__construct();

		$this->add(array(
			'type'    => 'select',
			'name'    => 'sideWallBays',
			'options' => array(
				'label'         => 'Side Wall Bays',
				'value_options' => array(
					'1 bays of 3 meters each' => '1 bays of 3 meters each',
				),
			),
		));

		$this->add(array(
			'type'    => 'select',
			'name'    => 'endWallBays',
			'options' => array(
				'label'         => 'End Wall Bays',
				'value_options' => array(
					'1 bays of 3 meters each' => '1 bays of 3 meters each',
				),
			),
		));
	}

}