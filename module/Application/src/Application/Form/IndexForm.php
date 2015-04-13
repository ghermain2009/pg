<?php
/**
 * Description of IndexForm
  */
namespace Application\Form;

use Zend\Form\Form;

class IndexForm extends Form
{
    public function __construct($datos = null) {
        parent::__construct('index');
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('action', 'http://buenisimo.ec/campana/pagorequest');
        
        $this->add(array(
            'name' => 'transaccion',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Usuario',
                'value' => $datos['operacion'],
            ),
        ));
        $this->add(array(
            'name' => 'monto',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Monto',
                'value' => $datos['monto'],
            ),
        ));
        $this->add(array(
            'name' => 'tarjeta',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Tarjeta',
                'value' => 'XXXX XXXX XXXX 678',
            ),
        ));
        $this->add(array(
            'name' => 'estado',
            'attributes' => array(
                'type'  => 'password',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Tarjeta',
                'value' => '3',
            ),
        ));
        $this->add(array(
            'name' => 'submit',
            'attributes' => array(
                'type'  => 'submit',
                'value' => 'Pagar',
                'id' => 'submitbutton',
                'class'  => 'btn btn-default',
            ),
        ));
    }
}
