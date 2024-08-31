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
        <h1>Situação do Aluno</h1>
    </header>
    <main>
        <?php 
            $nome = $_REQUEST["nome"];
            $nota1 = $_REQUEST["nota1"];
            $nota2 = $_REQUEST["nota2"];
            $media = ($nota1 + $nota2) / 2;
            echo "<p>É um prazer te conhecer, <strong>$nome</strong><br>
            sua média foi: <strong>$media</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>