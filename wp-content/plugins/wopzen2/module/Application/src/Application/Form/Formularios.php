<?php
/**
 * Created by JetBrains PhpStorm.
 * User: usuario
 * Date: 20/01/14
 * Time: 17:42
 * To change this template use File | Settings | File Templates.
 */

namespace Application\Form;

use Zend\Captcha\AdapterInterface as CaptchaAdapter;
use Zend\Form\Element;
use Zend\Form\Form;
use Zend\Captcha;
use Zend\Form\Factory;

class Formularios extends Form
{
    public function __construct($name = null)
    {
        parent::__construct($name);

        $this->add(array(
            'name' => 'name',
            'options' => array(
                'label' => 'Nombre',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
        $this->add(array(
            'name' => 'apellidos',
            'options' => array(
                'label' => 'Apellidos',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
        $this->add(array(
            'name' => 'email',
            'options' => array(
                'label' => 'Email',
            ),
            'attributes' => array(
                'type' => 'email',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
        $this->add(array(
            'name' => 'edad',
            'options' => array(
                'label' => 'Edad',
            ),
            'attributes' => array(
                'type' => 'integer',
                'class' => 'input',
                'required' => 'required',
                'size'  => '10'
            ),
        ));

        $municipio = new Element\Select('municipio');
        $municipio->setLabel('Municipio');
        $municipio->setValueOptions(array(
            '0' => 'Agüimes',
            '1' => 'Agaete',
            '2' => 'Artenara',
            '3' => 'Arucas',
            '4' => 'Firgas',
            '5' => 'Gáldar',
            '6' => 'Ingenio',
            '7' => 'La Aldea de San Nicolás',
            '8' => 'Las Palmas de GC',
            '9' => 'Mogán',
            '10' => 'Moya',
            '11' => 'San Bartolomé de Tirajana',
            '12' => 'Santa Brígida',
            '13' => 'Santa Lucía de Tirajana',
            '14' => 'Santa María de Guía',
            '15' => 'Tejeda',
            '16' => 'Telde',
            '17' => 'Teror',
            '18' => 'Valsequillo',
            '19' => 'Valleseco',
            '20' => 'Vega de San Mateo'
        ));

        $this->add($municipio);


        $this->add(array(
            'name' => 'usuario',
            'options' => array(
                'label' => 'Usuario',
            ),
            'attributes' => array(
                'type' => 'text',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
        //password
        $this->add(array(
            'name' => 'pass',
            'options' => array(
                'label' => 'Contraseña',
            ),
            'attributes' => array(
                'type' => 'password',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
        $this->add(array(
            'name' => 'pass2',
            'options' => array(
                'label' => 'Repetir contraseña',
            ),
            'attributes' => array(
                'type' => 'password',
                'class' => 'input',
                'required' => 'required',
                'size'  => '30'
            ),
        ));
/*
        $textarea = new Element\Textarea('texto');
        $textarea->setLabel('Introduce el texto');
        $this->add($textarea);
*/
        $this->add(array(
            'name' => 'texto',
            'options' => array(
                'label' => 'Introduce texto',

            ),
            'attributes' => array(
                'type' => 'textarea',
                'size'  => '30',


                'class' => 'input',
                'required' => 'required'
            ),
        ));






      //  $this->add(new Element\Csrf('security'));
        $this->add(array(
            'name' => 'send',
            'attributes' => array(
                'type' => 'submit',
                'value' => 'Enviar',
                'title' => 'Enviar'
                ),
        ));


    }
}

?>
