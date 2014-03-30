<?php
namespace Auth\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AuthController extends AbstractActionController
{
    public function indexAction()
    {
    $view = new ViewModel();
       return $view;

    
    }
    public function registerAction()
{
$view = new ViewModel();
$view->setTemplate('auth/auth/new-user');
return $view;
}
public function loginAction()
{
$view = new ViewModel();
$view->setTemplate('auth/auth/login');
return $view;
}


    
}