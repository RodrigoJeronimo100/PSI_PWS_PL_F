<?php

use Carbon\Carbon;
function calculaPlano($credit, $numPrest)
{

    $valorPrestMensal = $credit/$numPrest;
    $despesa = 50;

    for ($i = 0; $i < $numPrest; $i++) {
        //definir valor das variaveis a colocar na matriz
        $dataInicial = Carbon::now();
        $data = $dataInicial->addMonths($i)->format('d-m-Y H:i:s');
        $credit -= $valorPrestMensal;

        //preencher a matriz com o conteudo das variaveis
        //[linha][coluna]
        $planoPagamento[$i][0] = $data;
        if ($i == 0) {
            $planoPagamento[$i][1] = number_format($valorPrestMensal + $despesa, 2);
        } else {
            $planoPagamento[$i][1] = number_format($valorPrestMensal, 2);
        }
        $planoPagamento[$i][2] = round($credit, 2);
    }
    return $planoPagamento;
}
//var_dump($planoPagamento);
?>