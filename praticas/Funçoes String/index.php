<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 16 - Funções String em PHP</title>
</head>
<body> 
    <!-- 
        //FUNÇÃO ORD
        <?php
            $letra = "C";
            $cod = ord($letra);
            echo "A letra $letra tem código $cod";
                
            //resultado: A letra C tem código 67
        ?>
    -->

    <!-- 
        //FUNÇÃO CHR - NÃO ENTENDI PESQUISAR DEPOIS
        <?php 
            $letra = chr(67);
            echo "A letra de codigo 67 é $letra";
                
            //resultado: A letra de codigo 67 é c
        ?> 
    -->

    <!-- 
        //FUNÇÃO IMPLODE - NÃO ENTENDI PESQUISAR DEPOIS
        <?php                  
            $vetor[0] = "Curso";        
            $vetor[1] = "em";  
            $vetor[2] = "Vídeo"; 
            $texto = implode("#",$vetor); //pode ser substituido por join()
            print($texto);

            //resultado: Curso#em#Vídeo
        ?> 
    -->

    <!-- 
        //FUNÇÃO STR_SPLIT - NÃO ENTENDI PESQUISAR DEPOIS
        <?php                  
            $nome = "Maria";        
            $vetor = str_split($nome); 
            print_r($vetor); 

            //resultado: Array ( [0] => M [1] => a [2] => r [3] => i [4] => a )
        ?>
    -->

    <!-- 
        //FUNÇÃO EXPLODE - NÃO ENTENDI PESQUISAR DEPOIS     
        <?php            
            $site = "Curso em video";        
            $vetor = explode(" ", $site); 
            print_r($vetor); 

            //resultado: Array ( [0] => Curso [1] => em [2] => video )
        ?> 
    -->
    
    <!-- 
        //FUNÇÃO STR_WORD_COUNT - Entrega a quantidade de palavras que existem dentro de uma string.
        <?php     
            $frase = "Eu vou estudar PHP";        
            $cont = str_word_count($frase, 0); //0 conta as palavras - 1 cria um vetor com as palavras - 2 gera um vetor tambem (vetor mantendo o posicionamento de cada palavra dentro da string)
            print $cont; 

            //resultado: 4 palavras
        ?> 
    -->

    <!-- 
        FUNÇÃO RTRIM - (right-trim) - NÃO ENTENDI PESQUISAR DEPOIS
        <?php        
            $nome = "xxxJoséxdaxSilvaxxx";
            echo(strlen($nome)); 
            $novo = rtrim($nome);
            echo($novo);
            echo(strlen($novo)); 
        ?> 
    -->

    <!-- 
        FUNÇÃO LTRIM - lefttrim - NÃO ENTENDI PESQUISAR DEPOIS
        <?php        
            $nome = "xxxJoséxdaxSilvaxxx";
            echo(strlen($nome)); 
            $novo = ltrim($nome);
            echo($novo);
            echo(strlen($novo)); 
        ?> 
    -->
     
    <!-- 
        FUNÇÃO TRIM - Útil para dados vindos de formularios - "recortar pedaços" - NÃO ENTENDI PESQUISAR DEPOIS
        <?php        
            $nome = "xxxJoséxdaxSilvaxxx";
            echo(strlen($nome)); //resultado : 20
            $novo = trim($nome);
            echo($novo); //resultado : xxxJoséxdaxSilvaxxx
            echo(strlen($novo)); //resultado : 20    
        ?> 
    -->

    <!-- 
        FUNÇÃO STRLEN - serve para calcular o comprimento de uma string  
        <?php            
            $texto = "Curso em video";
            $tamanho = strlen($texto);
            echo ($tamanho);

            // resultado : 14 (incluindo os espaços entre as letras)
        ?> 
    --> 

    <!--
        FUNÇÃO WORDWRAP - serve para quebras de linhas dentro do meu código
        <?php             
            $t = "Este é um exemplo de string gigante criado pelo PHP e vai mostrar o funcionamento da funçãowordwrap";
            $res = wordwrap($t, 10, "<br>\n", false);
            echo ($res);   
            
            /*
            resultado : 
            Este é um
            exemplo de
            string
            gigante
            criado
            pelo PHP e
            vai
            mostrar o
            funcionamento
            da
            funçãowordwrap
            */
        ?>
         
    -->

    <!-- 
        FUNÇÃO PRINT_R - Serve para mostrar os detalhes da minha variavel principalmente array's
        Tambem pode ser substituido por var_dump($x); ou por var_export($x); 
        <?php             
            $x[0] = 4;
            $x[1] = 3;
            $x[2] = 8;
            print_r($x);    

            // resultado : Array ( [0] => 4 [1] => 3 [2] => 8 )
        ?> 
    -->

    <!--
        FUNÇÃO PRINTF - Serve para mostrar coisas na tela ja formatadas 
        <?php 
            $produto = "leite";
            $preco = 4.5;
            // echo "O $produto está custando R$" . number_format($preco, 2);
            printf("O %s está custando R$ %.2f", $produto, $preco);  //%s pra mostrar uma string e %.2f é a formatação (foot) com duas casas

            // resultado : O leite está custando R$ 4.50
        ?> 
    -->
    
</body>
</html> 