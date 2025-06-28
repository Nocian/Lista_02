<?php 
    
    $valorHora = (float)$_POST['valorHora'];
    $horasSemana = (int)$_POST['horasSemana'];


    $salario = $valorHora * $horasSemana * 4.5;


    echo "<p>Valor da Hora: R$ " . number_format($valorHora, 2, ',', '.') . "</p>";
    echo "<p>Horas Semanais: " . $horasSemana . "</p>";
    echo "<p>Seu salário bruto mensal é: <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong></p>";


?>
<?php // FECHA O PHP ?>

<p><a href="At01.html">Voltar ao formulário</a></p>

