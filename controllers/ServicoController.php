<?php
require_once 'Controller.php';
require_once 'models/Servico.php';
 require_once 'models/Iva.php';
class ServicoController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['funcionario','admin']);
    }
    public function index()
    {
        $servicos = servico::all();

        $this->renderView('servico','index', ['servico'=>$servicos]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $servicos = servico::find($id);
        if (is_null($servicos)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('servico','show', ['servico'=>$servicos]);
        }
    }
    public function create()
    {
        $ivas = iva::all();
        $this->renderView('servico','create', ['iva'=>$ivas]);
        //mostrar a vista create
    }

    public function store()
    {
        $iva = iva::all();
        $servicos = new servico($this->getHTTPPost());

        if($servicos->is_valid()){
            $servicos->save();
            //redirecionar para o index
            $this->redirectToRoute('servico','index');
        } else {
            $this->renderView('servico','create', ['servicos'=>$servicos, 'iva'=>$iva] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        $servicos = servico::find($id);
        if (is_null($servicos)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('servico', 'edit', ['servicos'=>$servicos]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $servicos = servico::find($id);
        $servicos->update_attributes($this-> getHTTPPost());
        if($servicos->is_valid()){
            $servicos->save();
            $this->redirectToRoute('servico','index');
            //redirecionar para o index
        } else {
            $this->renderView('servico', 'edit', ['servicos'=>$servicos]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $servicos = servico::find($id);
        $servicos->delete();
        //redirecionar para o index
        $this->redirectToRoute('servico','index');
    }

}