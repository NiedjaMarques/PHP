<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição Do While</title>
</head>
<body>
    <?php 
        $userNumber = isset($_GET["tab"]) ? $_GET["tab"] : 0;
        $tabuada = 1;
        $result = '';

        echo "<h1>Mostrando a tabuada de $userNumber</h1>";

        do {            
            $result = $userNumber." X ".$tabuada." = ".($userNumber * $tabuada)."<br>"; //foi dado valor a variavel result que faz a multiplicação
            $tabuada++; //tabuada sempre será acrescentada +1 quando ate chegar em 10
            echo "<br>$result"; //mosta result formatado na tela
        } while ($tabuada <= 10);   
    ?>
    
    <br><a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a>
    


    <!-- <?php //ESTRUTURA DE REPETIÇÃO DO WHILE - SCRIPT PARA CALCULAR O FATORIAL DE UM NÚMERO INTEIRO
        $v = isset($_GET["num"]) ? $_GET ["num"] : 1; //pega valor que usuario colocar na caixa
        $c = 1; //inicializa a contagem com 1

        echo "O fatorial de $v "; //mostra o valor original de v

        do { //faça...
            $c *= $v; // 1 x (valor que o usuario colocar)...
            $v--; // o novo valor depois da multiplicação (ele mesmo) -1 --- repete a linha 16 so que com o novo valor de v depois da subtração
        } while ($v >= 1);

        echo "é $c"         
    ?> -->

    <!-- ESTRUTURA DE REPETIÇÃO DO WHILE - CONTAGEM REGRESSIVA DE 20 A 1
    <?php 
        $c = 20; //c vale 20
        do { //faça o código abaixo
            echo "$c "; //aparece c na tela (contagem)
            $c--; //c-1 ate chegar em 1
        } while ($c >= 1);// enquanto c for maior ou igual a 1 (quando chegar em 1, para a contagem), faça a contagem regressiva
    ?> -->

    <!-- ESTRUTURA DE REPETIÇÃO DO WHILE - CONTAGEM CRESCENTE DE 1 A 20 - Pulando de 2 em 2;
        <?php 
        $c = 1; //c vale 1
        do { //faça o código abaixo
            echo "$c "; //aparece c na tela (contagem)
            $c+=2; //c+=2 ate chegar em 20 (CONTAGEM PULANDO DE DOIS EM DOIS)
        } while ($c <= 20);// enquanto c for menor ou igual a 10, faça a contagem    
    ?> -->

    <!-- ESTRUTURA DE REPETIÇÃO DO WHILE - CONTAGEM CRESCENTE DE 1 A 10;
        <?php 
        $c = 1; //c vale 1
        do { //faça o código abaixo
            echo "$c "; //aparece c na tela (contagem)
            $c++; //c+1 ate chegar em 10
        } while ($c <= 10);// enquanto c for menor ou igual a 10, faça a contagem crescente   
    ?> -->
    
</body>
</html>