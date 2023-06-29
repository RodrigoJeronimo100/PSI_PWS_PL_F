<?php

class FolhaObra extends \ActiveRecord\Model
{

    // Estado: 1 - em lancamento; 2 - emitida; 3 - paga; 4 - anulada
    static $validates_presence_of = array(
        //array('data'),
        //array('valor_total'),
        //array('iva_total'),
        array('estado', 'message' => 'It must be provided'),
    );
    static $belongs_to = array(
      array('funcionario', 'class_name'=>'User',  'foreign_key'=>'id_funcionario'),
      array('cliente', 'class_name'=>'User',  'foreign_key'=>'id_cliente')
    );
}