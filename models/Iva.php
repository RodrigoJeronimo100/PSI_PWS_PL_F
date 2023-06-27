<?php

class Iva extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('percentagem', 'message' => 'It must be provided'),
        array('descricao', 'message' => 'It must be provided'),
        array('vigor')
    );

}