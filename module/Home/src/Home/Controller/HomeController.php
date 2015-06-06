<?php

namespace Home\Controller;

use Zend\View\Model\ViewModel,
    Zend\Mvc\Controller\AbstractActionController;

class HomeController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function sobreAction()
    {
        return new ViewModel();
    }

    public function contatoAction()
    {
        return new ViewModel();
    }

    public function servicosAction()
    {
        return new ViewModel();
    }
}
