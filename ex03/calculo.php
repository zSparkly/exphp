<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Salário do Funcionário</h1>
    </header>
    <main>
        <?php 
            $sal = $_REQUEST["sal"];
            $vendas = $_REQUEST["vendas"];
            $comissao = $vendas * 0.04;
            $salf = $sal + $vendas * 0.04;

            echo "<p>Salário final do funcionário <strong>$salf</strong><br>
            Ganho por comissão de vendas <strong>$comissao</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>