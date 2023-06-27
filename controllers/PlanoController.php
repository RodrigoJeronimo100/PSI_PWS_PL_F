<?php
require_once 'Controller.php';
include_once 'models/CalculadoraPlano.php';
class PlanoController extends Controller {



public function __construct()
{
    $this->authenticationFilter();
}
public function index(){

        $this->renderView('plano','index');

        }

public function show(){

        $credito = $this->getHTTPPostParam('credito');
        $numPrest = $this->getHTTPPostParam('prestacao');

        $despesa = 10;

        $calculadoraPlano = new CalculadoraPlano();

        $planoPagamento = $calculadoraPlano->calculaPlano($credito, $numPrest);
        //include_once'vistas/vistaplano.php';
        $this->renderView('plano','show', ['planoPagamento' => $planoPagamento]);
    }



}