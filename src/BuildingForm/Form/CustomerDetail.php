<?php

namespace BuildingForm\Form;

use Zend\Form\Form;

class CustomerDetail extends Form {
	public function __construct() {

		parent::__construct();

		$this->add(array(
			'name'    => 'projectRef',
			'type'    => 'text',
			'options' => array(
				'label' => 'Project Ref',
			),
		));

		$this->add(array(
			'name'    => 'name',
			'type'    => 'text',
			'options' => array(
				'label' => 'Name',
			),
		));

		$this->add(array(
			'name'    => 'addr',
			'type'    => 'text',
			'options' => array(
				'label' => 'Address',
			),
		));

		$this->add(array(
			'name'    => 'siteAddr',
			'type'    => 'text',
			'options' => array(
				'label' => 'Site Address',
			),
		));

		$this->add(array(
			'name'    => 'postCode',
			'type'    => 'text',
			'options' => array(
				'label' => 'Post Code',
			),
		));

		$this->add(array(
			'name'    => 'phone',
			'type'    => 'text',
			'options' => array(
				'label' => 'phone',
			),
		));

		$this->add(array(
			'name'    => 'mobile',
			'type'    => 'text',
			'options' => array(
				'label' => 'mobile',
			),
		));

		$this->add(array(
			'name'    => 'email',
			'type'    => 'text',
			'options' => array(
				'label' => 'email',
			),
		));
	}
}