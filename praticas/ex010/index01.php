<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de repetição For</title>
</head>
<body>
    <?php 
        $n = isset($_GET["v"]) ? $_GET["v"] : 0;
        // $t = 1;

        print "<h1>Analisamos o número $n...</h1>";

        for ($n=1; $n <= 1 ; $n++) { 
            print "<h3>Valores múltiplos: </h3>"; //uma var ($valoresMultiplos)
            print "<h3>Total de múltiplos: </h3>"; //outra var ($totalMultiplos)
            print "<h3>Resultado: $n <strong>É PRIMO!</strong></h3>"; //outra var ($result)
            print "<h3>Resultado: $n <strong>NÃO É PRIMO!</strong></h3>"; //outra var ($result)
        }

        //tem um if nessa repetição for
    
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