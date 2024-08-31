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
        <h1>Valor carro com impostos</h1>
    </header>
    <main>
        <?php 
            $custo = $_REQUEST["custo"];

            if($custo < 40000){
                $custo += $custo * 0.05;

            }
            elseif($custo < 69999){
                $imposto = $custo * 0.15;
                $dist = $custo * 0.10;
                $custo += $dist + $imposto;
                
            }

            else{
                $imposto = $custo * 0.15;
                $dist = $custo * 0.20;
                $custo += $dist + $imposto;


            }
            echo "<p>valor final carro para o consumidor => <strong>$custo</strong>";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>