<?php
require_once 'Controller.php';
require_once 'models/FolhaObra.php';
require_once 'models/LinhaObra.php';
require_once 'models/Empresa.php';
class LinhaObraController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['cliente','funcionario','admin']);
    }
    public function index()
    {
        $empresa = empresa::first();
        $linhaobras = linhaobra::all();

        $this->renderView('linhaobra','index', ['linhaobras'=>$linhaobras, 'empresa'=>$empresa]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function index_id($id)
    {
        $folhaobra = folhaobra::find($id);
        $_SESSION['folhaobra'] = $folhaobra ;
        $empresa = empresa::first();
        $linhaobras = linhaobra::all();

        $this->renderView('linhaobra','index', ['linhaobras'=>$linhaobras, 'empresa'=>$empresa]);

        //mostrar a vista index passando os dados por parâmetro
    }

    public function show($id)
    {
        $folhaobras = folhaobra::find($id);
        if (is_null($folhaobras)) {
            //TODO redirect to standard error page
        } else {
            //mostrar a vista show passando os dados por parâmetro
            $this->renderView('folhaobra','show', ['folhaobra'=>$folhaobras]);
        }
    }
    public function create()
    {
        $empresa = empresa::first();
        $servicos = servico::all();
        $this->renderView('linhaobra','create', ['servicos'=>$servicos, 'empresa'=>$empresa]);
        //mostrar a vista create
    }

    public function store()
    {
        $linhaobra = new linhaobra($this->getHTTPPost());
        $servico = $linhaobra->servico;
        $linhaobra->valor_iva=$servico->iva->percentagem;
        $linhaobra->valor_un=$servico->preco_hora;

        if($linhaobra->is_valid()){
            $linhaobra->save();
            //redirecionar para o index
            $this->redirectToRoute('linhaobra','index');
        } else {
            $this->renderView('linhaobra','create', ['linhaobra'=>$linhaobra, 'servico'=>$servico] );
            //mostrar vista create passando o modelo como parâmetro
        }
    }
    public function edit($id)
    {
        $folhaobras = folhaobra::find($id);
        if (is_null($folhaobras)) {
            //TODO redirect to standard error page
        } else {
            $this->renderView('folhaobra', 'edit', ['folhaobras'=>$folhaobras]);
            //mostrar a vista edit passando os dados por parâmetro
        }
    }
    public function update($id)
    {
        $folhaobras = folhaobra::find($id);
        $folhaobras->update_attributes($this-> getHTTPPost());
        if($folhaobras->is_valid()){
            $folhaobras->save();
            $this->redirectToRoute('folhaobra','index');
            //redirecionar para o index
        } else {
            $this->renderView('folhaobra', 'edit', ['folhaobras'=>$folhaobras]);
            //mostrar vista edit passando o modelo como parâmetro
        }
    }
    public function delete($id)
    {
        $folhaobras = folhaobra::find($id);
        $folhaobras->delete();
        //redirecionar para o index
        $this->redirectToRoute('folhaobra','index');
    }

}