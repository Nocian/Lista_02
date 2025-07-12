<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Salário</title>
</head>
<body>
    <h1>Resultado do Salário Bruto Mensal</h1>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        
        $valorHora = (float)$_POST['valorHora'];
        $horasSemana = (int)$_POST['horasSemana'];

        
        $salario = $valorHora * $horasSemana * 4.5;


    echo "<p>Valor da Hora: R$ " . number_format($valorHora, 2, ',', '.') . "</p>";
    echo "<p>Horas Semanais: " . $horasSemana . "</p>";
    echo "<p>Seu salário bruto mensal é: <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong></p>";


?>
<?php ?>

    <p><a href="At01.html">Voltar ao formulário</a></p>
</body>
</html>