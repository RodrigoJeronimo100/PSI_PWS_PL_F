<?php
require_once 'Controller.php';
require_once 'models/FolhaObra.php';
require_once 'models/LinhaObra.php';
require_once 'models/Empresa.php';
class FolhaObraController extends Controller
{
    public function __construct()
    {
        $this->authorizationFilter(['cliente','funcionario','admin']);
    }
    public function index()
    {
        $empresa = empresa::first();
        $folhaobras = folhaobra::all();
        $linhaobras = linhaobra::all();
        $this->renderView('folhaobra','index', ['folhaobras'=>$folhaobras, 'linhaobras'=>$linhaobras]);

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
        $clientes = user::all();
        $linhaobras = linhaobra::all();
        $this->renderView('folhaobra','create', ['linhaobra'=>$linhaobras, 'clientes'=>$clientes, 'empresa'=>$empresa]);
        //mostrar a vista create
    }

    public function store()
    {

        $folhaobra = new FolhaObra($this->getHTTPPost());

        if($folhaobra->is_valid()){
            $linhaobras = LinhaObra::all();
            $folhaobra->save();
            //redirecionar para o index
            $_SESSION['folhaobra'] = $folhaobra;
            $this->redirectToRoute('linhaobra','index');

        } else {

            $this->renderView('folhaobra','create', ['folhaobra'=>$folhaobra->id] );
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

    public function emit()
    {
        //array('data'),
        //array('valor_total'),
        //array('iva_total'),
        $folhaobra = folhaobra::find($_SESSION['folhaobra']->id);
        $folhaobra->data = date("d.m.y");
        $folhaobra->estado = 2;

        $linhaobras = linhaobra::all();
        $valor_total = 0;
        $iva_total = 0;
        foreach ($linhaobras as $linhaobra)
        {
            if($linhaobra->id_folha_obra ==  $folhaobra->id)
            {
                $valor_total = $valor_total + $linhaobra->quantidade * $linhaobra->valor_un;
                $iva_total = $iva_total + $linhaobra->quantidade * $linhaobra->valor_un * $linhaobra->valor_iva / 100;
            }
        }
        $folhaobra->valor_total = $valor_total;
        $folhaobra->iva_total = $iva_total;


        $folhaobra->save();
        $this->redirectToRoute('folhaobra','index');

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
        $folhaobra = folhaobra::find($id);
        $folhaobra->estado = 4;
        $folhaobra->save();
        //redirecionar para o index
        $this->redirectToRoute('folhaobra','index');
    }

}