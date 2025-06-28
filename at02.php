<?php 
    
    $valorReais = (float)$_POST['valorReais'];
    $cotacao = (int)$_POST['cotacao'];


    $valorEmDolar = $valorReais / $cotacao;


    echo "<p>Valor em dolar: $ " . number_format($valorEmDolar, 2, ',', '.') . "</p>";

?>
<?php // FECHA O PHP ?>

<p><a href="At02.html">Voltar ao formulário</a></p>

