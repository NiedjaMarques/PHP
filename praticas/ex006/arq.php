<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php 

        $texto = isset($_GET["t"]) ? $_GET["t"] : "[NÃO INFORMADO]";
        $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "[NÃO INFORMADO]";
        $cor = isset($_GET["cor"]) ? $_GET["cor"] : "[NÃO INFORMADO]";

    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
    <style>
        span.texto{
            font-size: <?php echo $tamanho; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
</head>
<body>
    <?php 
        echo "<span class='texto'>$texto</span>";
    
    ?>   

    <br><a href="index.php"><input type="submit" value="Voltar"></a>



    <!-- <?php 
        $nome = isset($_GET["inome"]) ? $_GET["inome"] : "[NÃO INFORMADO]";//inome é o nome do meu objeto
        $anonasc = isset($_GET["iano"]) ? $_GET["iano"] : "[NÃO INFORMADO]";
        $sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "[NÃO INFORMADO]";
        $idade = date("Y") - $anonasc;
        echo "$nome é $sexo e tem $idade anos.";
    ?>
    
    <br><a href="index.php"><input type="submit" value="Voltar"></a> -->
</body>
</html>
