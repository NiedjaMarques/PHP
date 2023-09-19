<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição Do While</title>
</head>
<body>
    <?php //ESTRUTURA DE REPETIÇÃO DO WHILE - SCRIPT PARA CALCULAR O FATORIAL DE UM NÚMERO INTEIRO
        $v = isset($_GET["num"]) ? $_GET ["num"] : 0;
        $c = 1;
            
    ?>


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
        } while ($c <= 100);// enquanto c for menor ou igual a 10, faça a contagem crescente   
    ?> -->
    
</body>
</html>