<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Form\IndexForm;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $datos = $this->params()->fromPost();
        $viewmodel = new ViewModel();
        $form = new IndexForm($datos);
        $viewmodel->form = $form;
        return $viewmodel;
    }
}
