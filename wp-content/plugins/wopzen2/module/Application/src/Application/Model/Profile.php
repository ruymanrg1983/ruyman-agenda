<?php
/**
 * Created by JetBrains PhpStorm.
 * User: usuario
 * Date: 25/02/14
 * Time: 13:17
 * To change this template use File | Settings | File Templates.
 */
namespace  Application\Model;


use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface;

class Profile implements InputFilterAwareInterface
{
    public $profilename;
    public $fileupload;
    public $password;
    protected $inputFilter;

    public function exchangeArray($data)
    {
        $this->profilename  = (isset($data['name']))  ? $data['name']     : null;
        $this->fileupload  = (isset($data['email']))  ? $data['email']     : null;
        $this->password  = (isset($data['password']))  ? $data['password']     : null;
        $this->fileupload  = (isset($data['fileupload']))  ? $data['fileupload']     : null;
    }

    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        throw new \Exception("Not used");
    }

    public function getInputFilter()
    {
        if (!$this->inputFilter) {
            $inputFilter = new InputFilter();
            $factory     = new InputFactory();

            $inputFilter->add(
                $factory->createInput(array(
                    'name'     => 'name',
                    'required' => true,
                    'filters'  => array(
                        array('name' => 'StripTags'),
                        array('name' => 'StringTrim'),
                    ),
                    'validators' => array(
                        array(
                            'name' => 'not_empty',
                            'options' => array(
                                'messages' => array('isEmpty' => 'No puede estar vacío'),
                            )
                        ),
                        array(
                            'name'    => 'StringLength',
                            'options' => array(
                                'encoding' => 'UTF-8',
                                'min'      => 6,
                                'max'      => 100,
                               // 'messages' => array('too_Short' => 'Mas de 5 caracteres'),
                            ),
                        ),
                    ),
                ))
            );

         /*   $inputFilter->add(
                $factory->createInput(array(
                    'name'     => 'password',
                    'required' => true,
                    'filters'  => array(
                        array('name' => 'StripTags'),
                        array('name' => 'StringTrim'),
                    ),
                    'validators' => array(
                        array(
                            'name' => 'not_empty',
                            'options' => array(
                                'messages' => array('isEmpty' => 'No puede estar vacío'),
                            )
                        ),

                    ),
                ))
            );*/

        /*    $inputFilter->add(
                $factory->createInput(array(
                    'name'     => 'fileupload',
                    'required' => true,
                ))
            );*/



            $this->inputFilter = $inputFilter;
        }

        return $this->inputFilter;
    }
}