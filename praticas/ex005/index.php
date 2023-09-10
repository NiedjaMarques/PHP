<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $x = "abc";
            $$x = "def"; //variaveis de variaveis
            echo "<br>O conteúdo da variavel X é $x";
            echo "<br>A variavel ABC criada recebeu o valor $abc";
            
        ?>
    </div>

    <!-- <div>
        <?php 
            $a = 3;
            $b = &$a; //referencia entre variaveis
            $b += 5;
            echo "A variavel A vale $a ";
            echo "<br> A variavel B vale $b";
            
        ?>
    </div> -->

    <!-- <div>        
        <?php
            $atual = $_GET["aa"]; //Essa linha vai pegar o ano na URL
            echo "O ano atual é $atual<br> e o ano anterior é ". --$atual;
        ?>
    </div> -->

    <!-- <div>
        <?php 
            $preco = $_GET ["p"];
            echo "O preço do produto é R$ " .number_format($preco,2,",",".");
            $preco += $preco*10/100;
            echo "<br> E o novo preço com 10% de aumento será R$ ".number_format($preco, 2,",","."); 
        ?>
    </div> -->
    
</body>
</html>