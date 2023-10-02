<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 14 - Rotinas em PHP</title>
</head>
<body>
    <?php
        function soma(){
            $p = func_get_arg(); //Pega todos os argumentos e coloca dentro do vetor 'p'
            $tot = func_num_args(); //Retorna o número de elementos que foram passados
            $s = 0;
            
            for ($i=0; $i < $tot; $i++) { //enquanto i for menor que o número de elementos que foram passados, i++ 
                $s += $p[$i]; //$s + variavel 'p' no indice 'i'
            }
            return $s;
        }

        $res = soma(3, 5, 2); //Chamada da minha função no HTML, sem ela, a mensagem não aparece
        echo "A soma é $res. "; //Mostra mensagem na tela
    ?>


    <!-- <?php 
        /*PEGA OS VALORES QUE O USUARIO COLOCAR NO INPUT*/
        $number1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $number2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;

        /*FUNÇÃO PARA SOMA
        function soma($number1, $number2){
            $s = $number1 + $number2; //$s é a soma de n1 e n2 - essa linha pode ser substituida por return $number1 + $number2;
            return $s; //retorna valor de $s
        };*/

        $res = soma($number1, $number2); //Chamada da minha função no HTML, sem ela, a mensagem não aparece
        echo "A soma entre $number1 e $number2 é $res. "; //Mostra mensagem na tela
    ?> -->
    
    <!-- <?php 
        /*PEGA OS VALORES QUE O USUARIO COLOCAR NO INPUT*/
        $num1 = isset($_GET["n1"]) ? $_GET["n1"] : 0;
        $num2 = isset($_GET["n2"]) ? $_GET["n2"] : 0;

        /*FUNÇÃO PARA SOMA*/
        //function soma($num1, $num2){
            //$s = $num1 + $num2; //$s é a soma de num1 e num2
            //echo "<p>A soma é $s </p>"; //Mensagem que aparece na tela
        //};

        soma($num1, $num2); //Chamada da minha função no HTML, sem ela, a mensagem não aparece
    ?> -->
</body>
</html> 