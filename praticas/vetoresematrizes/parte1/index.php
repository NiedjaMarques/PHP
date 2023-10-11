<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores e Matrizes - Aula 18 - parte 1</title>
</head>
<body>
    <h1>
        Aula 18 - Arrays
    </h1>

    <pre>
        <?php
            //Chaves associativas 
        
            $v = array("nome"=>"Ana", "idade"=>23, "peso" => 65.5);
            $v["fuma"] = true; //adiciona o valor "fuma" 
            foreach ($v as $campo => $frase) {
                echo "$campo: $frase <br>";
            }  
                       
            //Resultado: 
            //[nome] => Ana
            //[idade] => 23
            //[peso] => 65.5

            //nome: Ana 
            //idade: 23 
            //peso: 65.5 
            //fuma: 1  
        ?>
    </pre>

    <!-- <pre>
        <?php
            //Chaves personalizadas 
        
            $v = array(1=>"A",3=>"B",6=>"C", 8=>"D");
            $v[] = "E";
            unset($v[9]); //remove meu vetor de indice 9
            print_r($v); 

            // Resultado: 
            // [1] => A
            // [3] => B
            // [6] => C
            // [8] => D
            // [9] => E
        ?>
    </pre> -->

    <!-- <pre>
        <?php
            //FORACH - é uma estrutura de controle usada para percorrer os elementos de um array ou objetos iteráveis, como uma lista de itens
        
            $n = range("A", "Z"); //O "foreach" percorrerá o array $n, atribuirá cada letra a $valor e executará o código dentro do loop (no caso, exibir as letras na tela)
            foreach ($n as $valor) {
                echo "<td>$valor ";
            }
        ?>
    </pre> -->

    <!-- <pre>
        <?php
            //RANGE'S - a sintaxe básica é: start, end, step (É uma função que cria sequencias de números ou caracteres em um intervalo específico)
            $c = range(1, 10, 2);
            print_r($c);

            $c = range(5, 20, 5); 
            print_r($c);
        ?>
    </pre> -->

    <!-- <pre>
        <?php
            //ARRAY'S 
            $n = array(3, 5, 8, 2, 7);
            $n[] = 10;
            print_r($n);
        ?>
    </pre> -->
        
</body>
</html>