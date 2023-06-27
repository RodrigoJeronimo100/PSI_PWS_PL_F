<?php
require_once 'Controller.php';
require_once 'models/User.php';
// require_once 'models/Genre.php';
class ClienteController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['funcionario','admin']);
    }
    public function index()
    {
        $users = user::all();

        $this->renderView('user','index', ['users'=>$users]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $users = user::find($id);
        if (is_null($users)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('user','show', ['users'=>$users]);
        }
    }
    public function create()
    {
        $this->renderView('user','create', ['usertype'=>3]);
        //mostrar a vista create
    }
    public function createfunc()
    {
        $this->renderView('user','create', ['usertype'=>2]);
        //mostrar a vista create
    }

    public function store()
    {
        $users = new user($this->getHTTPPost());

        if($users->is_valid()){
            $users->save();
            //redirecionar para o index
            $this->redirectToRoute('user','index');
        } else {
            $this->renderView('user','create', ['users'=>$users] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        $users = user::find($id);
        if (is_null($users)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('user', 'edit', ['users'=>$users]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $users = user::find($id);
        $users->update_attributes($this-> getHTTPPost());
        if($users->is_valid()){
            $users->save();
            $this->redirectToRoute('user','index');
            //redirecionar para o index
        } else {
            $this->renderView('user', 'edit', ['users'=>$users]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $user = user::find($id);
        $user->delete();
        //redirecionar para o index
        $this->redirectToRoute('user','index');
    }

}