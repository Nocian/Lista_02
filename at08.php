<?php 
    
    $anoNascimento = (int)$_GET['anoNascimento'];


    $idade = date('Y') - $anoNascimento;

 
    echo "<p>Você tem : <strong>" . $idade . "</strong> anos</p>";

  

?>
<?php ?>

<p><a href="At08.html">Voltar ao formulário</a></p>

