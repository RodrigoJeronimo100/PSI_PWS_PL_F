<?php

class LinhaObra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade', 'message' => 'It must be provided'),
        array('valor_un', 'message' => 'It must be provided'),
        array('valor_iva', 'message' => 'It must be provided'),
    );
    static $belongs_to = array(
        array('FolhaObra'),
    );
    static $has_one = array(
        array('Servico'),
    );
}