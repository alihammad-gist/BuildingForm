<?php

namespace BuildingForm\Form;

use BuildingForm\Form\BuildingType;
use BuildingForm\Form\Exception\InvalidRoofType;
use Zend\Form\Form;

class BuildingSpec extends Form {

	public function __construct() {
		parent::__construct();

		$form->add(array(
			'type'    => 'radio',
			'name'    => 'unit',
			'options' => array(
				'label'         => 'Unit Type',
				'value_options' => array(
					'Metric'   => 'Metric',
					'Imperial' => 'Imperial',
				),
			),
		));

		$this->add(array(
			'name'    => 'buildingWidth',
			'type'    => 'text',
			'options' => array(
				'label' => 'Building Width',
			),
		));

		$this->add(array(
			'name'    => 'buildingLength',
			'type'    => 'text',
			'options' => array(
				'label' => 'Building Length',
			),
		));

		$this->add(array(
			'name'    => 'eavesHeight',
			'type'    => 'text',
			'options' => array(
				'label' => 'Eave Height',
			),
		));

	}

	public function setFieldsForRoofType($roofId) {
		switch ($roofId) {
		case BuildingType::ROOF_GABLE:
			$this->setFieldsForRoofMono();
			break;

		case BuildingType::ROOF_HIP:
			$this->setFieldsForRoofHip();
			break;

		case BuildingType::ROOF_DUTCH:
			$this->setFieldsForRoofDutch();
			break;

		case BuildingType::ROOF_ASSYMETRIC:
			$this->setFieldsForRoofAssymetric();
			break;

		case BuildingType::ROOF_MONO:
			$this->setFieldsForRoofMono();
			break;

		default:
			throw new InvalidRoofType;
		}
	}

	private function setFieldsForRoofGable() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'roofPitch',
			'options' => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
		));
	}

	private function setFieldsForRoofHip() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'roofPitch',
			'options' => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
		));
	}

	private function setFieldsForRoofDutch() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'roofPitch',
			'options' => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
		));
	}

	private function setFieldsForRoofAssymetric() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'roofPitch',
			'options' => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'5'     => '5',
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
		));

		$this->add(array(
			'name'    => 'leftSpan',
			'type'    => 'text',
			'options' => array(
				'label' => 'Left Span',
			),
		));

		$this->add(array(
			'name'    => 'rightSpan',
			'type'    => 'text',
			'options' => array(
				'label' => 'Right Span',
			),
		));
	}

	private function setFieldsForRoofMono() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'roofPitch',
			'options' => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'5'     => '5',
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
		));
	}
}