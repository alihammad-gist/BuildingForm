<?php

namespace BuildingForm;

use Wizard\Step\AbstractStep;

class DefaultStep extends AbstractStep {

	public function getViewTemplate() {
		return 'building-form/step/default';
	}

}