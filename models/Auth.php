<?php

class Auth
{
    public function __construct()
    {
        if(!isset($_SESSION)) {
            session_start();
        }
    }

    public function checkAuth($utilizador, $senha) {
        $user = user::find_by_username($utilizador);

        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            if ($user->password==$senha){
            //mostrar a vista show passando os dados por parâmetro
                $_SESSION['utilizador']= $utilizador;
                $_SESSION['role']= $user->role;
                return true;
            }
            else
            {
              return false;
            }

        }
    }

    public function isLoggedIn() {
        if(isset($_SESSION['utilizador'])) {
            return true;
        } else {
            return false;
        }
    }


 

    public function logout(){
        session_destroy();
    }
    public function isLoggedInAs($roles=[])
    {
        if(isLoggedIn())
        {
        $role = $this->getRole();
        return in_array($role, $roles);
        }
    }
}