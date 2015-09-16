<?php

namespace BuildingForm\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{

    public function indexAction()
    {
        return new ViewModel();
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

