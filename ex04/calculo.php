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
        <h1>Resultado Trapézio</h1>
    </header>
    <main>
        <?php 
            $maior = $_REQUEST["maior"];
            $menor = $_REQUEST["menor"];
            $altura = $_REQUEST["altura"];
            $area = ($maior + $menor) / 2 * $altura;

            echo "<p>Área do trapézio => <strong>$area</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>