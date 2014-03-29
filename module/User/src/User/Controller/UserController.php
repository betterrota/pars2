<?php
namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
    $view = new ViewModel();
      return $view;

    }
    public function registerAction()
{
$view = new ViewModel();
$view->setTemplate('user/user/new-user');
return $view;
}
public function loginAction()
{
$view = new ViewModel();
$view->setTemplate('user/user/login');
return $view;
}


}