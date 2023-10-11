<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 17 - Funções String em PHP - parte 2</title>
</head>
<body>
    <!-- 
        // FUNÇÃO STR_REPLACE - Ela é usada para fazer substituições de texto em uma string.
        <?php
            $frase= "Gosto de estudar Matemática!!!";
            $novaFrase = str_replace("Matemática", "PHP", $frase);//substituindo matematica por php - posso usar str_ireplace que vai ignorar as letras minusculas caso o usuario escreva errado
            print $novaFrase;

            //Resultado = Gosto de estudar PHP!!!
        ?> 
    -->
    
    <!-- 
        FUNÇÃO STR_REPEAT - serve para repetir uma string (cadeia de caracteres) um número especificado de vezes.  
        <?php 
            $txt = str_repeat("Php", 5); //vai repetir Php 5 vzs
            print ("O texto gerado foi $txt");
            print(str_repeat("-", 20)); //vai repetir - 20 vezes

            //Resultado: O texto gerado foi PhpPhpPhpPhpPhp
        ?>
    -->   

    <!-- 
        FUNÇÃO STR_PAD - Faz uma string caber em um determinado espaço (NÃO FUNCIONOU, TESTAR NOVAAMENTE DEPOIS) 
        <?php 
            $nome = "Guanabara";
            $novo = str_pad($nome, 30, " ", STR_PAD_RIGHT);
            //Estamos tentando fazer o nome Niedja caber em 30 caracteres, ele vai colocar espaços e vamos complementar a direita.
            print ("Meu professor $novo é lindo!");

            //Resultado: deveria aparecer assim : Meu professor Guanabaraxxxxxxxxxxxxxxxxxxxxx é lindo!
            //existe o STR_PAD_CENTER E O STR_PAD_LEFT
        ?>
    -->
     
    <!-- FUNÇÃO SUBSTR - é usada para extrair uma parte de uma string (cadeia de caracteres).
        <?php 
            $site = "Curso em Vídeo";
            $substring = substr($site, 0, 5); // 0 representa por onde quero iniciar a contagem (inicio) e 5 quantas casas eu quero contar
            print "$substring ";

            //Resultado: Curso
        ?>
    -->    

    <!-- 
        FUNÇÃP SUBSTR_COUNT - Conta quantas vezes uma determinada palavra aparece na string
        <?php 
            $frase = "Estou aprendendo PHP no curso em video de PHP";
            $contagem = substr_count($frase, "PHP");
            print "PHP encontrador $contagem vezes";

            //Resultado: PHP encontrador 2 vezes
        ?> 
    -->

    <!-- 
        FUNÇÃO STRIPOS - Serve para dizer em qual posição uma determinada substring (uma palavra da frase toda) se encontra dentro de uma string 
        <?php        
            $frase = "Estou aprendendo PHP";
            $pos = stripos($frase, "php"); //vai ser encontrada mesmo que eu coloque php em minuscula
            print "A string foi encontrada na posição $pos";

            //Resultado: A string foi encontrada na posição 17 (Inicia a contagem por 0 e 17 é o primeiro P do PHP - os espaços em branco contam)
        ?> 
    -->
    
    <!-- 
        FUNÇÃO STRPOS - Serve para dizer em qual posição uma determinada substring (uma palavra da frase toda) se encontra dentro de uma string
        <?php           
            $frase = "Estou aprendendo PHP";
            $pos = strpos($frase, "PHP"); //para ser encontrada precisa estar igual a frase
            print "A string foi encontrada na posição $pos";

            //Resultado: A string foi encontrada na posição 17 (Inicia a contagem por 0 e 17 é o primeiro P do PHP - os espaços em branco contam)
        ?> 
    -->

    <!-- 
        FUNÇÃO STRREV - serve para inverter uma string, ou seja, ela reverte a ordem dos caracteres na string
        <?php            
            $nome = "niedja maria marques de arruda";
            print("Seu nome é " .strrev($nome));

            //Resultado: Seu nome é adurra ed seuqram airam ajdein
        ?> 
    -->

    <!-- 
        FUNÇÃO UCWORDS - serve para capitalizar (converter em letra maiúscula) a primeira letra de cada palavra em uma string
        <?php
            $nome = "niedja maria marques de arruda";
            print("Seu nome é " .ucwords($nome));

            //Resultado: Seu nome é Niedja Maria Marques De Arruda
        ?> 
    -->

    <!-- 
        FUNÇÃO UCFIRST - serve para converter o primeiro caractere de uma string em letra maiúscula
        <?php
            $nome = "niedja maria marques de arruda";
            print("Seu nome é " .ucfirst($nome));

            //Resultado: Seu nome é Niedja maria marques de arruda
        ?> 
    -->

    <!-- 
        FUNÇÃO STRTOUPPER - é usada para converter uma string em letras maiúsculas   
        <?php  
            $nome = "Niedja Maria Marques de Arruda";
            print("Seu nome é ".strtoupper($nome));

            //Resultado: Seu nome é NIEDJA MARIA MARQUES DE ARRUDA
        ?> 
    -->

    <!-- 
        FUNÇÃO STRTOLOWER - é usada para converter uma string em letras minúsculas 
        <?php
            $nome = "Niedja Maria Marques de Arruda";
            //$nome2 = strtolower($nome);
            //print "Seu nome é $nome2" ;
            print("Seu nome é ".strtolower($nome));

            //Resultado: Seu nome é niedja maria marques de arruda
        ?> 
    -->
</body>
</html>