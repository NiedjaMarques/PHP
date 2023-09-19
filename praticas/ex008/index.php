<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index01.php" method="get">
        Inicio: <input type="number" name="inicio" id="inicio" max="100" min="0"><br>
        Final: <input type="number" name="final" id="final" max="100" min="0"><br>

        Incremento: <select name="incremento" id="incremento" max="5" min="1">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select><br>
 
        <input type='submit' value='Enviar'>  
    </form>
    
</body>
</html>