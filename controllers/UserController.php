<?php
require_once 'Controller.php';
require_once 'models/User.php';
class UserController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['user', 'funcionario','admin']);
    }
    public function index()
    {
        $users = user::all();

        $this->renderView('user','index', ['users'=>$users]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($username)
    {
        $user = user::find($username);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('user','show', ['user'=>$user]);
        }
    }
    public function create()
    {
        //    $genres = Genre::all();
        //    $this->renderView('book','create', ['genres'=>$genres]);
        //mostrar a vista create
    }

    public function store()
    {
       // $genres = Genre::all();
        $user = new user($this->getHTTPPost());

        if($user->is_valid()){
            $user->save();
            //redirecionar para o index
            $this->redirectToRoute('user','index');
        } else {
            $this->renderView('user','create', ['user'=>$user] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($username)
    {
       // $genres = Genre::all();
        $user = user::find($username);
        if (is_null($user)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('user', 'edit', ['user'=>$user]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($username)
    {
        $user = user::find($username);
        $user->update_attributes($this-> getHTTPPost());
        if($user->is_valid()){
            $user->save();
            $this->redirectToRoute('user','index');
            //redirecionar para o index
        } else {
            $this->renderView('user', 'edit', ['book'=>$user]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($username)
    {
        $user = user::find($username);
        $user->delete();
        //redirecionar para o index
        $this->redirectToRoute('user','index');
    }

}