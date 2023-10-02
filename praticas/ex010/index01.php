<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição For</title>
    <style>
        body {
            font: normal 20px arial;
        }
    </style>
</head>
<body>
    <?php
        //Número primo é divisivel APENAS por 1 e ele mesmo
        //Apenas DOIS divisores

        $numero = isset($_GET["v"]) ? $_GET["v"] : 0;//var que guarda o valor que o usuario colocar
        $divisores = 0;//variavel de inicialização númerica    
        // $n = ["Niedja" => 32, 0 => 1, 1 => 2];
        // var_dump($n);
        // die();

        print "<h1>Analisamos o número $numero</h1>";//frase que aparece na tela 

        /*ESTRUTURA DE REPETIÇÃO FOR COM UM IF*/
        for ($r = 1; $r <= $numero; $r++) { //Linha serve para inicializar o processo da divisão do numero do usuario por outros numeros seguintes a ele
            if ($numero % $r == 0) {//linha testa se o numero do usuario é divisivel pelo numero seguinte e se o resto da operação é zero 
                $divisores++; //adiciona +1 na minha variavel caso o resto seja zero  
                $multiplos[] = $r; // Adiciona o valor ao array de múltiplos              
            }
        }

        /*ESTRUTURA CONDICIONAL IF*/
        if ($divisores == 2) { //se o número de divisores for 2 é primo
            print "<h3>Valores múltiplos: " . implode(", ", $multiplos) . "</h3>";
            print "<h3>Total de múltiplos: $divisores </h3>";
            print "<h3>Resultado: $numero <strong>É PRIMO!</strong></h3>"; 
        }else{
            print "<h3>Valores múltiplos: " . implode(", ", $multiplos) . "</h3>"; // Exibe os múltiplos separados por vírgula
            print "<h3>Total de múltiplos: $divisores </h3>";
            print "<h3>Resultado: $numero <strong>NÃO É PRIMO!</strong></h3>"; 
        }

    ?>
    
    <br><a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a> 

    
    <!-- <?php
        for ($n=1; $n <= 24 ; $n++) { 
            print "$n ";
        }
        echo "<br>";
        for ($n=24; $n >= 1 ; $n--) { 
            print "$n ";
        }
        echo "<br>";
        for ($n=0; $n <= 100 ; $n+=5) { //irá somar de 5 em 5
            print "$n ";
        }
        echo "<br>";
        for ($n=100; $n >= 0 ; $n-=5) { //irá subtrair de 5 em 5
            print "$n ";
        }
        echo "<br>";
        for ($n=24; $n >= 0 ; $n-=2) { //irá subtrair de 2 em 2 
            print "$n ";
        }
    ?> -->    
</body>
</html>