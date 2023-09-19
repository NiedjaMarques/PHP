<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $est = isset($_GET["estado"]) ? $_GET["estado"] : "[NÃO INFORMADO]";

        switch ($est) {
            case 1:
                echo "<p>Você mora na <strong>Região Norte</strong></p>";
                break;
            
            case 2:
                echo "<p>Você mora na <strong>Região Nordeste</strong></p>";
                break;

            case 3:
                echo "<p>Você mora na <strong>Centro-Oeste</strong></p>";
                break;

            case 4:
                echo "<p>Você mora na <strong>Região Sudeste</strong></p>";
                break;
            
            case 5:
                echo "<p>Você mora na <strong>Região Sul</strong></p>";
                break;

            default:
                # code...
                break;
        }
    
    ?>


    <br><a href="javascript:history.go(-1)"><input type="submit" value="Voltar"></a>


    <!-- <?php 
        $diasem = isset($_GET["diasem"]) ? $_GET["diasem"] : "[NÃO INFORMADO]";
        
        switch ($diasem) {
            case 2:
            case 3:    
            case 4:
            case 5:    
            case 6:    
                echo "Levanta e vai estudar! :)";
                break;
            
            case 7:
            case 8:    
                echo "Descanse, sem aula hoje! ;)";
                break;
                                                     
            default:
                echo "Dia da semana invalido."; 
                break;
        }   
    
    
    ?> -->    

    <!-- <?php 
        $numero = isset($_GET["num"]) ? $_GET["num"] : "[NÃO INFORMADO]"; // usuario irá inserir numero
        $operacao = isset($_GET["oper"]) ? $_GET["oper"] : "[NÃO INFORMADO]"; // vai ser verificado a operação que o usuario quer (valor 1, 2 ou 3)                       

        switch ($operacao) { // testa qual valor o usuario escolher
            case 1: //se for 1 vai ter a operação abaixo
                $r = $numero * 2;
                break;
            
            case 2: //se for 2 vai ter a operação abaixo
                $r = $numero ** 3;
                break;
            
            case 3: //se for 3 vai ter a operação abaixo
                $r = sqrt($numero);
                break;
                        
            default:
                echo "Não informado";
                break;
        }   
        
        echo "<p>O resultado da operação solicitada foi <strong>$r</strong></p>"; 
    ?> -->

    <!-- <?php 
        $nota1 = isset($_GET["n1"]) ? $_GET["n1"] : "[NÃO INFORMADO]";
        $nota2 = isset($_GET["n2"]) ? $_GET["n2"] : "[NÃO INFORMADO]";
        $media = ($nota1 + $nota2)/2;

        echo "A média entre $nota1 e $nota2 é igual a $media";        
        if($media >= 7){
            echo "<br>A situação do aluno: APROVADO!";
        }else if ($media > 5){
            echo "<br>A situação do aluno: RECUPERAÇÃO!";
        }else{
            echo "<br>A situação do aluno: REPROVADO!";
        }
    
    ?> -->
    
    <!-- <?php 
        $ano = $_GET["ano"];
        $idade = date("Y") - $ano;

        echo "Você nasceu em $ano, tem $idade anos.";

        if($idade < 16){
            echo "<br>NÃO VOTA!";
        }else if ($idade >=16 && $idade<18 || $idade > 65) {
            echo "<br>VOTO OPCIONAL!";
        }else{
            echo "<br>VOTO OBRIGATÓRIO!";
        }        
    
    ?>   -->  
    
</body>
</html>