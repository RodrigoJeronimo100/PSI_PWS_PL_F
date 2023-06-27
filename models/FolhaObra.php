<?php

class FolhaObra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('data', 'message' => 'It must be provided'),
        array('valor_total', 'message' => 'It must be provided'),
        array('iva_total', 'message' => 'It must be provided'),
        array('estado', 'message' => 'It must be provided'),

    );
    static $has_many = array(
        array('LinhaObra')
    );
    static $has_one = array(
      array('Cliente'),
      array('Funcionario'),
    );
}