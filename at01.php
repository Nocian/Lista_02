<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Salário</title>
</head>
<body>
    <h1>Resultado do Salário Bruto Mensal</h1>

    <?php // ABRE O PHP - TUDO AQUI DENTRO É CÓDIGO PHP

    // 1. Verificar se o formulário foi enviado
    // $_SERVER["REQUEST_METHOD"] == "POST" verifica se a página foi acessada por um envio de formulário POST.
    // Isso evita que a pessoa acesse o At01.php diretamente sem preencher o formulário.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        // 2. Pegar os valores que vieram do formulário
        // $_POST é uma "variável especial" do PHP que guarda todos os dados enviados por um formulário com method="post".
        // O que estava no campo HTML com name="valorHora" agora está em $_POST['valorHora'].
        // (float) e (int) são para garantir que os valores sejam números (com ou sem casas decimais) para a conta.
        $valorHora = (float)$_POST['valorHora'];
        $horasSemana = (int)$_POST['horasSemana'];

        // 3. Fazer o Cálculo
        // Seguindo a fórmula do exercício: salario = valorHora * horasSemana * 4.5
        $salario = $valorHora * $horasSemana * 4.5;

        // 4. Mostrar o Resultado
        // echo é o comando para "escrever" algo na página HTML.
        // number_format() é uma função legal para formatar números como moeda (2 casas decimais, vírgula para decimal, ponto para milhar).
        echo "<p>Valor da Hora: R$ " . number_format($valorHora, 2, ',', '.') . "</p>";
        echo "<p>Horas Semanais: " . $horasSemana . "</p>";
        echo "<p>Seu salário bruto mensal é: <strong>R$ " . number_format($salario, 2, ',', '.') . "</strong></p>";

    } else {
        // Se a pessoa tentou acessar At01.php diretamente (sem enviar o formulário), mostramos uma mensagem.
        echo "<p>Por favor, preencha o formulário em <a href='At01.html'>At01.html</a> para calcular o salário.</p>";
    }
    ?>
    <?php // FECHA O PHP ?>

    <p><a href="At01.html">Voltar ao formulário</a></p>
</body>
</html>