<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
    <div>
        <?php 
            $nasc = $_GET["nasc"];
            $anoatual = $_GET["ano"];
            $idade = $anoatual - $nasc;
            $r = $idade >= 18 && $idade <= 64 ? "OBRIGATORIO" : "NÃO OBRIGATORIO";
            echo "Sua idade é: $idade anos";
            echo "<br> Seu voto é $r";
        
        ?>
    </div>

    <!-- <div>
        <?php 
            $nota1 = $_GET["a"];
            $nota2 = $_GET["b"];
            $m = ($nota1+$nota2)/2;
            $r = ($m >= 7)?"APROVADO":"REPROVADO";
            echo "A media do aluno é : $m";
            echo "<br> O aluno foi : $r";
        
        ?>
    </div> -->
    <!-- <div>
        <h1>
            Operadores Relacionais e Operador Unário:
        </h1>
        <?php 
            $n1 = $_GET["a"];
            $n2 = $_GET["b"];
            $tipo = $_GET["op"]; // opção para o usuario de escolha, entre multiplicar e somar 
            $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2; // se tipo for igual a s(soma) se for m(multiplicação) acontece a soma de n1 e n2 se não, a multiplicação entre eles 
            echo "Os valores passados foram $n1 e $n2";
            echo "<br> O resultado será: $r";
        ?>
    </div> -->

    <!-- <div>
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
    </div> -->
    
</body>
</html>