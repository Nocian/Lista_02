<?php 
    
    $nome  = (string)$_GET['nome'];
    $sobrenome  = (string)$_GET['sobrenome'];

    $email = strtolower($nome) . '.' . strtolower($sobrenome) . '@senai.com.br';

    echo "<p>email: <strong>" . $email . "</strong></p>";

  

?>
<?php?>

<p><a href="At11.html">Voltar ao formulário</a></p>

