<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Db\Adapter\Adapter;
use Zend\Db\Sql\Sql;
use Zend\Authentication\AuthenticationService;
use Zend\Authentication\Storage\Session as SessionStorage;
use Zend\Authentication\Result;
use Application\Form\Formularios;
use Application\Model\Profile;



use Zend\Captcha;
use Zend\Form\Element;
use Zend\Form\Fieldset;
use Zend\Form\Form;
use Zend\InputFilter\Input;
use Zend\InputFilter\InputFilter;




class FormularioController extends AbstractActionController
{



	public function __construct()
	{


	}

	public function indexAction()
	{

		$this->layout('layout/layoutv1');

		return new ViewModel();

	}

    public function formularioAction()
    {

        $this->layout('layout/layoutv1');
        $form = new Formularios();
        $request = $this->getRequest();
        if ($request->isPost()) {

            $profile = new Profile();
            $form->setInputFilter($profile->getInputFilter());

            $nonFile = $request->getPost()->toArray();
            $File    = $this->params()->fromFiles('fileupload');
            $data = array_merge(
                $nonFile,
                array('fileupload'=> $File['name'])
            );
            //set data post and file ...
            $form->setData($data);

            if ($form->isValid()) {
                \Zend\Debug\Debug::dump('Formulario Valido');
            }else{
                  \Zend\Debug\Debug::dump('Formulario Invalido');
            }
        }
        return array('form' => $form);
      /*  $form =new Formularios("form");

        return new ViewModel(array("form" => $form,'url'=>$this->getRequest()->getBaseUrl()));*/

    }
    public function recibeAction()
    {
        $this->layout('layout/layoutv1');
        return new ViewModel();
    }
    public function contactoAction()
    {
        $form =new Formularios("form");
        $this->layout('layout/layoutv1');
        return new ViewModel(array("form" => $form,'url'=>$this->getRequest()->getBaseUrl()));

    }

}

