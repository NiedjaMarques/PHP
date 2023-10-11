<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matrizes</title>
</head>
<body>
    <h1>
        Matrizes em PHP
    </h1>

    <?php        
        $x = 4;
        $y = &$x;
        $z = ++ $y;
        echo "X=$x Y=$y Z=$z";
    ?>

    <!-- <pre>
        <?php 
            $v = array(2=>"A",5=>"J",0=>"M",3=>"X",4=>"K");
            print_r($v);
            // sort($v); //coloca meu array em ordem crescente
            // print_r($v);

            // rsort($v); //coloca meu array em ordem reversa (ao contrario)
            // print_r($v);

            // asort($v); //coloca meus elementos em ordem crescente mas mexe nos meus indices tambem
            // print_r($v);
            
            // arsort($v); //coloca meus elementos em ordem reversa mas mexe nos meus indices tambem
            // print_r($v);

            // ksort($v); //Ordena de forma crescente os indices da minha array
            // print_r($v);

            krsort($v); //Ordena de forma reversa os indices da minha array
            print_r($v);
        ?>
    </pre> -->

    <!-- <pre>
        <?php 
            $v = array("A", "J", "M", "X", "K");
            $v[] = "O"; //metodo que acrescenta valores no final do meu array
            array_push($v, "W"); //metodo que acrescenta valores no final do meu array
            array_pop($v); //metodo que retira meu ultimo elemento da minha array             
            
            array_unshift($v, "ABC"); //acrescenta valores o inicio da minha array
            array_shift($v); //elimina o primeiro valor da minha array
            print_r($v);
        ?>
    </pre> -->

    <!-- <pre>
        <?php 
            $v = array("A", "J", "M", "X", "K");
            echo "O vetor tem ". count($v). " elementos <br>"; //count exibe a cotagem dos intens (elementos) de um vetor
            print_r($v);    
            
            //Resultado: O vetor tem 5 elementos 
        ?>
    </pre> -->

    <!-- <pre>
        <?php
            $n = array(array(2, 3), array(3, 4), array(9, 5));
            $n[2][0] = $n[1][1]; //substitui o valor da linha 2 coluna 0 pelo valor da linha 1 coluna 1
            print_r($n);            
        ?>
    </pre> --> 

    <!-- <pre>
        <?php
            $n = array(array(2, 3), array(3, 4), array(9, 5));
            print_r($n);

            /*RESULTADO:
                Array - ARRAY MÃE
                (
                    [0] => Array 
                    (
                        [0] => 2  
                        [1] => 3 
                    )
                    [1] => Array 
                    (
                        [0] => 3 
                        [1] => 4 
                    )
                    [2] => Array 
                    (
                        [0] => 9 
                        [1] => 5 
                    )
                )
            */
        ?>
    </pre> -->
</body>
</html>