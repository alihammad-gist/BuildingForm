<?php

namespace BuildingForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        $wizardFactory = $this->getServiceLocator()->get('Wizard\wizardFactory');

        /* @var $wizard \Wizard\WizardInterface */
        $wizard = $wizardFactory->create('building-form-wizard');

        return $wizard->process();
    }

    public function cancelAction()
    {
        return new ViewModel();
    }

    public function completeAction()
    {
        return new ViewModel();
    }


}

