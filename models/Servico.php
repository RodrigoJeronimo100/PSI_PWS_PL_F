<?php

class Servico extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('referencia', 'message' => 'It must be provided'),
        array('descricao', 'message' => 'It must be provided'),
        array('preco_hora', 'message' => 'It must be provided')
    );

    static $belongs_to = array(
        array('iva', 'class_name'=>'Iva', 'foreign_key'=>'id_iva')
    );
}