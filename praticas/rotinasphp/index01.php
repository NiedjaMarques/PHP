<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 15</title>
</head>
<body>
    <?php 
        //PASSAGEM POR REFERENCIA - qualquer alteração e x, vai alterar a
        function teste (&$x){ //x não tem nenhum valor...
            $x = $x + 2; //x pega o valor de a (3)+2 = 5 - x agora vale 5
            echo "<p>valor de x é = $x </p>"; // mostra 5 na tela
        } 
        
        $a = 3; //valor de a é pego como refencia para x 
        teste($a); //chamada para minha função
        echo "<p>agora esse é o novo valor de a = $a </p>"; // a que valia 3 agora vale 5 tambem   
    ?>
    
</body>
</html>