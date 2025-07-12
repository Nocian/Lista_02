<?php 
    
    $total  = (float)$_GET['total'];
    $pessoas  = (int)$_GET['pessoas'];

    $divisao = number_format($total / $pessoas, 2, ',', '.');
 
    echo "<p>o Valor por pessoa : R$<strong>" . $divisao . "</strong></p>";

  

?>
<?php ?>

<p><a href="At14.html">Voltar ao formulário</a></p>

