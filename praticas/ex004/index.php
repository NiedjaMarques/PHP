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
        <h1>
            Praticando com Operadores Aritmeticos:
        </h1>

        <?php 
            $v1 = $_GET["x"];
            $v2 = $_GET["y"];
            $m = ($v1+$v2)/2;
            echo "<br>Entre $v1 e $v2";
            echo "<br>A soma vale ".($v1 + $v2);
            echo "<br>A subtração vale ".($v1 - $v2);
            echo "<br>A multiplicação vale ".($v1 * $v2);
            echo "<br>A divisão vale ".($v1 / $v2);
            echo "<br>O módulo vale ".($v1 % $v2);
            echo "<br>A média vale ".($m);
            echo "<br>Valores recebidos na função aritmetica $v1 e $v2";
            echo "<br>O valor absoluto de $v2 é ".abs($v2);

        ?>
    </div>
    
</body>
</html>