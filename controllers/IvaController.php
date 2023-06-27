<?php
require_once 'Controller.php';
require_once 'models/Iva.php';
class IvaController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['funcionario','admin']);
    }
    public function index()
    {
        $ivas = iva::all();

        $this->renderView('iva','index', ['iva'=>$ivas]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $iva = iva::find($id);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('iva','show', ['iva'=>$iva]);
        }
    }
    public function create()
    {
            $this->renderView('iva','create');
        //mostrar a vista create
    }

    public function store()
    {
        // $genres = Genre::all();
        $iva = new iva($this->getHTTPPost());

        if($iva->is_valid()){
            $iva->save();
            //redirecionar para o index
            $this->redirectToRoute('iva','index');
        } else {
            $this->renderView('iva','create', ['iva'=>$iva] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        // $genres = Genre::all();
        $iva = iva::find($id);
        if (is_null($iva)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('iva', 'edit', ['iva'=>$iva]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $iva = iva::find($id);
        $iva->update_attributes($this-> getHTTPPost());
        if($iva->is_valid()){
            $iva->save();
            $this->redirectToRoute('iva','index');
            //redirecionar para o index
        } else {
            $this->renderView('iva', 'edit', ['iva'=>$iva]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $iva = iva::find($id);
        $iva->delete();
        //redirecionar para o index
        $this->redirectToRoute('iva','index');
    }

}