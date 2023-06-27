<?php
use Carbon\Carbon;
class CalculadoraPlano
{
    public function calculaPlano($credito, $numPrest) {
        $data = Carbon::now();
        $valorPrest = $credito/$numPrest;

        for($i=0; $i < $numPrest; $i++){
            $data = $data->copy()->addMonth();
            $planoPagamentos[$i] = array($data, $valorPrest,$credito-($valorPrest*($i+1)));
        }
        return $planoPagamentos;
    }
    public  function validaDados($credito, $numPrest){
        $errors = array();

        if(empty($credito) || empty($numPrest)) {
            array_push($errors, 'Não pode deixar os campos vazios!');
        }

        if(!is_numeric($credito) || !is_numeric($numPrest)) {
            array_push($errors, 'Ambos os campos são numéricos, só aceitam números!');
        }

        if(($credito < 0) || ($numPrest < 0)) {
            array_push($errors, 'Ambos os campos têm de ser superiores a 0!');
        }
        return $errors;

    }
}