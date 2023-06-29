<?php

class LinhaObra extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('quantidade', 'message' => 'It must be provided'),
        array('valor_un'),
        array('valor_iva'),
    );
    static $belongs_to = array(
        array('folhaObra', 'class_name'=>'FolhaObra','foreign_key'=>'id_folha_obra'),
        array('servico','class_name'=>'Servico','foreign_key'=>'id_servico'),
    );
}
