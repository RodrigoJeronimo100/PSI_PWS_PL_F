<?php
require_once 'Controller.php';
require_once 'models/Empresa.php';
class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['admin']);
    }
    public function index()
    {
        $empresa = empresa::first();

        $this->renderView('empresa','index', ['empresa'=>$empresa]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $empresa = empresa::find($id);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('empresa','show', ['empresa'=>$empresa]);
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
        $empresa = new empresa($this->getHTTPPost());

        if($empresa->is_valid()){
            $empresa->save();
            //redirecionar para o index
            $this->redirectToRoute('empresa','index');
        } else {
            $this->renderView('empresa','create', ['empresa'=>$empresa] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        $empresa = empresa::find($id);
        if (is_null($empresa)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $empresa = empresa::find($id);
        $empresa->update_attributes($this-> getHTTPPost());
        if($empresa->is_valid()){
            $empresa->save();
            $this->redirectToRoute('funcionario','index');
            //redirecionar para o index
        } else {
            $this->renderView('empresa', 'edit', ['empresa'=>$empresa]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $empresa = empresa::find($id);
        $empresa->delete();
        //redirecionar para o index
        $this->redirectToRoute('empresa','index');
    }

}