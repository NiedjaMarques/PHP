<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
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
    
    ?>

    <br><a href="index.php"><input type="submit" value="Voltar"></a>



    
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