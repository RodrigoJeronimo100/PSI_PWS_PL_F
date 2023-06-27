<?php
require_once 'models/Auth.php';
require_once 'controllers/Controller.php';

class AuthController extends Controller
{
    public function index(){
        //devolve a vista de login
        $this->renderView('auth','index');

    }
    public function login(){

                $utilizador = $this->getHTTPPostParam('utilizador');
                $senha = $this->getHTTPPostParam('senha');
                $auth = new Auth();

                if($auth->checkAuth($utilizador, $senha)) {
                    var_dump('dgfgfg');

                    if($_SESSION['role']==1){
                        $this->redirectToRoute('funcionario','index');

                    }
                    if($_SESSION['role']==2){
                        $this->redirectToRoute('funcionario','index');

                    }
                    if($_SESSION['role']==3){
                        $this->redirectToRoute('book','index');

                    }

                } else {
                    $this->renderView('auth','index');
                }
        }
    public function logout(){
        $auth = new Auth();
        $auth ->logout();
    require_once 'views/auth/index.php'; 
    }

}