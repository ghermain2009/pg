<?php
/**
 * Description of IndexForm
  */
namespace Application\Form;

use Zend\Form\Form;

class IndexForm extends Form
{
    public function __construct($datos = null, $url = null) {
        parent::__construct('index');
        
        $this->setAttribute('method', 'post');
        $this->setAttribute('role', 'form');
        $this->setAttribute('action', $url.'/campana/pagorequest');
        
        $selEstados = array('00' => 'Aprobado',
                            '01' => 'Denegada',
                            '05' => 'Rechazada');
        
        $selTarjetas = array('VISA' => 'VISA',
                            'MASTERCARD' => 'MASTERCARD',
                            'AMEX' => 'AMEX');
        
        $this->add(array(
            'name' => 'purchaseOperationNumber',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Codigo Transaccion',
                'value' => $datos['purchaseOperationNumber'],
            ),
        ));
        $this->add(array(
            'name' => 'monto',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Monto',
                'value' => $datos['purchaseAmount'],
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'brand',
            'options' => array(
                 'value_options' => $selTarjetas,
             ),
            'attributes' => array(
                'class' => 'form-control input-sm'
            ),
        ));
        $this->add(array(
            'name' => 'paymentReferenceCode',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Ingrese Tarjeta',
                'value' => 'XXXX XXXX XXXX 678',
            ),
        ));
        $this->add(array(
            'type' => 'Zend\Form\Element\Select',
            'name' => 'authorizationResult',
            'options' => array(
                 'value_options' => $selEstados,
             ),
            'attributes' => array(
                'class' => 'form-control input-sm'
            ),
        ));
        
        $this->add(array(
            'name' => 'authorizationCode',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Codigo de Autorizacion',
                'value' => '',
            ),
        ));
        
        $this->add(array(
            'name' => 'errorCode',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Codigo de Error',
                'value' => '',
            ),
        ));
        
        $this->add(array(
            'name' => 'errorMessage',
            'attributes' => array(
                'type'  => 'text',
                'class'  => 'form-control',
                'placeholder'  => 'Mensaje de Error',
                'value' => '',
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
