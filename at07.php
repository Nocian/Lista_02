<?php 
    
    $salarioInicial = (float)$_POST['salarioInicial'];
    $valorReajuste = (int)$_GET['valorReajuste'];

    $valorFinal =($salarioInicial * $valorTaxa / 100) + $valorInicial;

 
    echo "<p>Você o valor final é  : <strong>R$: " . $valorFinal . "</strong></p>";

  

?>
<?php // FECHA O PHP ?>

<p><a href="At05.html">Voltar ao formulário</a></p>

