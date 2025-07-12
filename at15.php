<?php 
    
    $nome  = (string)$_GET['nome'];
    $preco  = (float)$_GET['preco'];
 
    echo "Produto: ". $nome."<br>Preço: R$". number_format($preco, 2, ',', '.');

  

?>
<?php ?>

<p><a href="At14.html">Voltar ao formulário</a></p>

