<?php
require_once 'controllers/AuthController.php';
require_once 'controllers/HomeController.php';
require_once 'controllers/EmpresaController.php';
require_once 'controllers/FuncionarioController.php';
require_once 'controllers/UserController.php';
require_once 'controllers/IvaController.php';
require_once 'controllers/ServicoController.php';
require_once 'controllers/FolhaObraController.php';
require_once 'controllers/LinhaObraController.php';


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
        'show' => ['POST','FuncionarioController','show'],
        'editEmail'=> ['GET','UserController','editEmail'],
        'editPassword'=> ['GET','UserController','editPassword']
    ],

    'user'=>[
        'index'=> ['GET','UserController','index'],
        'show'=> ['GET','UserController','show'],
        'edit'=> ['GET','UserController','edit'],
        'update'=> ['POST','UserController','update'],
        'store'=> ['POST','UserController','store'],
        'create'=> ['GET','UserController','create'],
        'createfunc'=> ['GET', 'UserController','createfunc'],
        'delete'=> ['GET','UserController','delete'],
        'updateDados'=> ['POST','UserController','updateDados'],

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

    'folhaobra'=>[
        'index'=> ['GET','FolhaObraController','index'],
        'show'=> ['GET','FolhaObraController','show'],
        'edit'=> ['GET','FolhaObraController','edit'],
        'update'=> ['POST','FolhaObraController','update'],
        'store'=> ['POST','FolhaObraController','store'],
        'create'=> ['GET','FolhaObraController','create'],
        'emit'=> ['GET','FolhaObraController','emit'],
        'delete'=> ['GET','FolhaObraController','delete']
    ],

    'linhaobra'=>[
        'index'=> ['GET','LinhaObraController','index'],
        'index_id'=> ['GET','LinhaObraController','index_id'],
        'store'=> ['POST','LinhaObraController','store'],
        'create'=> ['GET','LinhaObraController','create'],
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

];
