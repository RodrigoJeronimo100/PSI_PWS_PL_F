
<a href="index.php?c=plano&a=index"><p>Fazer outra simulação!</p></a>
<br>

<table border = "1">
    <tr>
        <th>Nº Prest</th>
        <th>Data</th>
        <th>Valor Prest.</th>
        <th>Valor em dívida</th>
    </tr>

    <?php
    $IDPrestacao = 1;

    foreach ($planoPagamento as $content) { ?>
        <tr>
            <td class="first-column"><?= $IDPrestacao ?></td>
            <td><?= $content[0]->toDateString() ?></td>
            <td><?= number_format($content[1], 2) ?></td>
            <td><?= number_format($content[2],2) ?></td>
        </tr>
        <?php
        $IDPrestacao++;
    } ?>
</table>
