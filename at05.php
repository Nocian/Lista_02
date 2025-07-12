<?php 
    
    $valorInicial = (int)$_GET['valorInicial'];
    $valorTaxa = (int)$_GET['valorTaxa'];

    $valorFinal =($valorInicial * $valorTaxa / 100) + $valorInicial;

 
    echo "<p>Você o valor final é  : <strong>R$: " . $valorFinal . "</strong></p>";

  

?>
<?php ?>

<p><a href="At05.html">Voltar ao formulário</a></p>

