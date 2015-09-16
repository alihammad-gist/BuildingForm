<?php

namespace BuildingForm\Form;

use BuildingForm\Form\BuildingUsage;
use BuildingForm\Form\Exception\InvalidBuildingUsage;
use Zend\Form\Form;

class BuildingType extends Form {

	const ROOF_GABLE      = '1';
	const ROOF_HIP        = '2';
	const ROOF_MONO       = '3';
	const ROOF_DUTCH      = '4';
	const ROOF_ASSYMETRIC = '5';

	public function setOptionsForBuildingUsage($usageId) {
		switch ($usageId) {
		case BuildingUsage::USAGE_DOMESTIC:
			$this->setOptionsForDomesticUsage();
			break;

		case BuildingUsage::USAGE_AGRICULTURAL:
			$this->setOptionsForAgriculturalUsage();
			break;

		case BuildingUsage::USAGE_INDUSTRIAL:
			$this->setOptionsForIndustrialUsage();
			break;

		default:
			throw new InvalidBuildingUsage;
		}
	}

	private function setOptionsForDomesticUsage() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'typeDomestic',
			'options' => array(
				'label'         => 'Select Type of Building',
				'empty_option'  => 'Select',
				'value_options' => array(
					self::ROOF_GABLE => "Gable Roof",
					self::ROOF_HIP   => "Hip Roof",
					self::ROOF_MONO  => "Mono Roof",
					self::ROOF_DUTCH => "Dutch Roof",
				),
			),
		));
	}

	private function setOptionsForAgriculturalUsage() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'typeAggricultural',
			'options' => array(
				'label'         => 'Select Type of Building',
				'empty_option'  => 'Select',
				'value_options' => array(
					self::ROOF_GABLE      => "Gable Roof",
					self::ROOF_MONO       => "Mono Roof",
					self::ROOF_ASSYMETRIC => "Assymetric Roof",
				),
			),
		));
	}

	private function setOptionsForIndustrialUsage() {
		$this->add(array(
			'type'    => 'select',
			'name'    => 'typeIndustrial',
			'options' => array(
				'label'         => 'Select Type of Building',
				'empty_option'  => 'Select',
				'value_options' => array(
					self::ROOF_GABLE      => "Gable Roof",
					self::ROOF_MONO       => "Mono Roof",
					self::ROOF_ASSYMETRIC => "Assymetric Roof",
				),
			),
		));
	}
}