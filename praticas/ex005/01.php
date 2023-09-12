<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 8 - Integração HTML + PHP</title>
    <link rel="stylesheet" href="_css/estilos.css">
</head>
<body>

    <?php 
        $val = $_GET["valor"]; // valor é o nome do meu objeto - $_GET pq no meu form eu escolhi o metodo GET
        $rq = sqrt($val); //variavel que calcula a raiz quadrada do valor que o usuario digitou
        echo "A raiz de $val é igual a ".number_format($rq, 2);
    ?> 
    
    <a href="index.php">Voltar</a>

</body>
</html>