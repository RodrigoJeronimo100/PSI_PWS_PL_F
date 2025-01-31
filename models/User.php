<?php

class User extends \ActiveRecord\Model
{
    static $validates_presence_of = array(
        array('username', 'message' => 'It must be provided'),
        array('password', 'message' => 'It must be provided'),
        array('email', 'message' => 'It must be provided'),
        array('nif', 'message' => 'It must be provided'),
        array('tel', 'message' => 'It must be provided'),
        array('morada', 'message' => 'It must be provided'),
        array('codigo_postal', 'message' => 'It must be provided'),
        array('localidade', 'message' => 'It must be provided'),
        array('role', 'message' => 'It must be provided')
    );
}