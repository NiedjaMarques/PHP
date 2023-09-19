<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- ESTRUTURA DE REPETIÇÃO WHILE - CÓDIGO QUE FAZ UM CONTADOR PERSONALIZADO
        <?php
        $inicio = isset($_GET["inicio"]) ? $_GET["inicio"] : "0";
        $final = isset($_GET["final"]) ? $_GET["final"] : "0";
        $incremento = isset($_GET["incremento"]) ? $_GET["incremento"] : "0";

        if($inicio > $final){
            while ($inicio >= $final) {            
                echo  "$inicio ";
                $inicio = $inicio-$incremento;
            }
        }else if ($inicio < $final){
            while ($inicio <= $final) {            
                echo  "$inicio ";
                $inicio = $inicio+$incremento;
            }
        }        
    ?> -->

    <br><a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a>

    <!-- ESTRUTURA DE REPETIÇÃO WHILE - CÓDIGO QUE FAZ CONTAGEM REGRESSIVA
        <?php 
        $c = 10;
        while ($c >= 1) { //enquanto for maior ou igual a 1...
            echo "passo $c <br>";
            $c-=2; //ouuu (c -= 2) quer dizer vou tirar 2 da variavel c
        }    
    ?> -->

    <!-- ESTRUTURA DE REPETIÇÃO WHILE - CONTAGEM PROGRESSIVA 
        <?php 
        $c = 1; //Variavel c começa com 1
        while ($c <= 24){
            echo "passo $c <br>";
            $c++;
        }   
    ?> -->

</body>
</html>