<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/BookController.php';
require_once 'controllers/ChapterController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/FuncionarioController.php';
require_once 'controllers/ClienteController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/ServicoController.php';

return [
    'defaultRoute' => ['GET', 'HomeController', 'index'],
    'auth' => [
        'index' => ['GET', 'AuthController', 'index'],
        'login' => ['POST', 'AuthController', 'login'],
        'logout'=>['GET','AuthController','logout'],
    ],
    'funcionario'=>[
        'index'=> ['GET','FuncionarioController','index'],
        'create' => ['GET', 'FuncionarioController', 'create'],
        'show' => ['POST','FuncionarioController','show']
    ],

    'user'=>[

        'index'=> ['GET','ClienteController','index'],
        'show'=> ['GET','ClienteController','show'],
        'edit'=> ['GET','ClienteController','edit'],
        'update'=> ['POST','ClienteController','update'],
        'store'=> ['POST','ClienteController','store'],
        'create'=> ['GET','ClienteController','create'],
        'createfunc'=> ['GET', 'ClienteController','createfunc']
    ],

    'iva'=>[

        'index'=> ['GET','IvaController','index'],
        'show'=> ['GET','IvaController','show'],
        'edit'=> ['GET','IvaController','edit'],
        'update'=> ['POST','IvaController','update'],
        'store'=> ['POST','IvaController','store'],
        'create'=> ['GET','IvaController','create'],
        'delete'=> ['GET','IvaController','delete']
    ],

    'servico'=>[

        'index'=> ['GET','ServicoController','index'],
        'show'=> ['GET','ServicoController','show'],
        'edit'=> ['GET','ServicoController','edit'],
        'update'=> ['POST','ServicoController','update'],
        'store'=> ['POST','ServicoController','store'],
        'create'=> ['GET','ServicoController','create'],
        'delete'=> ['GET','ServicoController','delete']
    ],

    'book'=>[
        'index'=> ['GET', 'BookController', 'index'],
        'show' => ['GET', 'BookController', 'show'],
        'create' => ['GET', 'BookController', 'create'],
        'store' => ['POST', 'BookController', 'store'],
        'edit' => ['GET', 'BookController', 'edit'],
        'update' => ['POST', 'BookController', 'update'],
        'delete' => ['GET', 'BookController', 'delete'],
    ],
    'empresa'=>[
        'index'=> ['GET', 'EmpresaController', 'index'],
        'show' => ['GET', 'EmpresaController', 'show'],
        'create' => ['GET', 'EmpresaController', 'create'],
        'store' => ['POST', 'EmpresaController', 'store'],
        'edit' => ['GET', 'EmpresaController', 'edit'],
        'update' => ['POST', 'EmpresaController', 'update'],
        'delete' => ['GET', 'EmpresaController', 'delete'],
    ],
    'chapter'=> [
        'index' => ['GET', 'ChapterController', 'index'],
        'create' => ['GET', 'ChapterController', 'create'],
        'store' => ['POST', 'ChapterController', 'store'],
        'edit' => ['GET', 'ChapterController', 'edit'],

]
];
