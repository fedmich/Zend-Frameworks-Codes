<?php
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class HelloController extends AbstractActionController
{
    public function indexAction()
    {
		return new ViewModel();
    }
	public function worldAction()
    {
		return new ViewModel();
    }
	
	public function fooAction()
    {
        echo 'FOO';
        //	return new ViewModel();
    }

}
