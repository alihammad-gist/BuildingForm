<?php

namespace BuildingForm\Form;

use Zend\Form\Form;

class BuildingUsage extends Form {
	const USAGE_DOMESTIC     = '1';
	const USAGE_AGRICULTURAL = '2';
	const USAGE_INDUSTRIAL   = '3';

	public function __construct() {
		parent::__construct();

		$this->add(array(
			'type'    => 'radio',
			'name'    => 'buildingUsage',
			'options' => array(
				'label'         => 'Building Usage',
				'value_options' => array(
					self::USAGE_DOMESTIC     => 'Domestic',
					self::USAGE_AGRICULTURAL => 'Agricultural',
					self::USAGE_INDUSTRIAL   => 'Industrial',
				),
			),
		));
	}
}