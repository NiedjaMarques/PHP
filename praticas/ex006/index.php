<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 2</title>
</head>
<body>
    <div>

        <form action="arq.php" method="get">
            <!-- input texto -->
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="t"><br>

            <!-- area pra selecionar tamanho + opções -->
            <label for="itam">Tamanho</label>

            <select name="tam" id="tam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>

            </select><br>

            <!-- area pra selecionar a cor -->
            <label for="icor">Cor:</label>
            <input type="color" name="cor" id="cor"><br>

            <input type="submit" value="Gerar">

        </form>

    </div>
    <!-- <h1>
        Insira seus dados abaixo :
    </h1>

    <form action="arq.php" method="get">

        Nome: <input type="text" name="inome" id="inome"><br>
        Ano de Nascimento: <input type="number" name="iano" id="iano"><br>
        
        <fieldset><legend>Sexo</legend>

            <input type="radio" name="sexo" id="feminino" value="mulher" checked>
            <label for="feminino">Feminino</label><br>

            <input type="radio" name="sexo" id="masculino" value="homem">
            <label for="masculino">Masculino</label>

        </fieldset><br>

        <input type="submit" value="Enviar"><br>
        
        
    </form> -->
    
</body>
</html>