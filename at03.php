<?php 
    
    $peso = (int)$_POST['peso'];
    $altura = (float)$_POST['altura'];


    $IMC = $peso / ($altura * $altura);
    echo "<p>Peso: " . $peso . " kg</p>";
    echo "<p>Altura: " . $altura . " m</p>";

 
    echo "<p>Seu IMC é: <strong>" . number_format($IMC, 2, ',', '.') . "</strong></p>";

    if ($IMC < 18.5) {
        echo "<p>Classificação: Abaixo do peso</p>";
    } elseif ($IMC >= 18.5 && $IMC < 24.9) {
        echo "<p>Classificação: Peso normal</p>";
    } elseif ($IMC >= 25 && $IMC < 29.9) {
        echo "<p>Classificação: Sobrepeso</p>";
    } else {
        echo "<p>Classificação: Obesidade</p>";
    }

?>
<?php // FECHA O PHP ?>

<p><a href="At03.html">Voltar ao formulário</a></p>

