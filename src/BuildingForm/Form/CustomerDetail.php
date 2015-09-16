<?php

namespace BuildingForm\Form;

use Zend\Form\Form;

class CustomerDetail extends Form {
	public function __construct() {

		parent::__construct('customer-detail');

		$this->add(array(
			'name'    => 'projectRef',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'Project Ref',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'name',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'Name',
				'label_attributes' => array('class' => 'col-sm-2'),

			),
		));

		$this->add(array(
			'name'    => 'addr',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'Address',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'siteAddr',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'Site Address',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'postCode',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'Post Code',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'phone',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'phone',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'mobile',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'mobile',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));

		$this->add(array(
			'name'    => 'email',
			'type'    => 'text',
			'options' => array(
				'column-size'      => 'sm-10',
				'label'            => 'email',
				'label_attributes' => array('class' => 'col-sm-2'),
			),
		));
	}
}