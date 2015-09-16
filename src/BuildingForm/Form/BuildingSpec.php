<?php

namespace BuildingForm\Form;

use BuildingForm\Form\BuildingType;
use BuildingForm\Form\Exception\InvalidRoofType;
use Zend\Form\Form;

class BuildingSpec extends Form {

	public function __construct() {
		parent::__construct('building-spec');

		$this->add(array(
			'type'             => 'radio',
			'name'             => 'unit',
			'options'          => array(
				'label'         => 'Unit Type',
				'value_options' => array(
					'Metric'   => 'Metric',
					'Imperial' => 'Imperial',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));

		$this->add(array(
			'name'             => 'buildingWidth',
			'type'             => 'text',
			'options'          => array(
				'label' => 'Building Width',
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));

		$this->add(array(
			'name'             => 'buildingLength',
			'type'             => 'text',
			'options'          => array(
				'label' => 'Building Length',
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));

		$this->add(array(
			'name'             => 'eavesHeight',
			'type'             => 'text',
			'options'          => array(
				'label' => 'Eave Height',
			),
			'label_attributes' => array('class' => 'col-sm-2'),
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
			'type'             => 'select',
			'name'             => 'roofPitch',
			'options'          => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));
	}

	private function setFieldsForRoofHip() {
		$this->add(array(
			'type'             => 'select',
			'name'             => 'roofPitch',
			'options'          => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));
	}

	private function setFieldsForRoofDutch() {
		$this->add(array(
			'type'             => 'select',
			'name'             => 'roofPitch',
			'options'          => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));
	}

	private function setFieldsForRoofAssymetric() {
		$this->add(array(
			'type'             => 'select',
			'name'             => 'roofPitch',
			'options'          => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'5'     => '5',
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));

		$this->add(array(
			'name'             => 'leftSpan',
			'type'             => 'text',
			'options'          => array(
				'label' => 'Left Span',
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));

		$this->add(array(
			'name'             => 'rightSpan',
			'type'             => 'text',
			'options'          => array(
				'label' => 'Right Span',
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));
	}

	private function setFieldsForRoofMono() {
		$this->add(array(
			'type'             => 'select',
			'name'             => 'roofPitch',
			'options'          => array(
				'label'         => 'Roof Pitch',
				'value_options' => array(
					'5'     => '5',
					'10'    => '10',
					'15'    => '15',
					'20'    => '20',
					'Other' => 'Other',
				),
			),
			'label_attributes' => array('class' => 'col-sm-2'),
		));
	}
}