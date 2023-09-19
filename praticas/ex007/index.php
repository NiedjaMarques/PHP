<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Estados:
    </h1>

    <form action="meuarq.php" method="get">
        <label for="estado"></label>
        Estado: <select name="estado" id="estado">
            <option value="1">Amazonas</option>
            <option value="1">Roraima</option>
            <option value="1">Amapá</option>
            <option value="1">Pará</option>
            <option value="1">Tocantins</option>
            <option value="1">Rondônia</option>
            <option value="1">Acre</option>

            <option value="2">Maranhão</option>
            <option value="2">Piauí</option>
            <option value="2">Ceará</option>
            <option value="2">Rio Grande do Norte</option>
            <option value="2">Pernambuco (PE)</option>
            <option value="2">Paraíba</option>
            <option value="2">Sergipe</option>
            <option value="2">Alagoas</option>
            <option value="2">Bahia</option>

            <option value="3">Mato Grosso</option>
            <option value="3">Mato Grosso do Sul</option>
            <option value="3">Goiás</option>

            <option value="4">São Paulo</option>
            <option value="4">Rio de Janeiro</option>
            <option value="4">Espírito Santo</option>
            <option value="4">Minas Gerais</option>

            <option value="5">Paraná</option>
            <option value="5">Rio Grande do Sul</option>
            <option value="5">Santa Catarina</option>

        </select>

        <input type="submit" value="Verificar">


    </form>







    <!-- <form action="meuarq.php" method="get">
        Dia da semana: <input type="number" name="diasem" id="diasem" min="2" max="8" required="">
        <input type="submit" value="Analisar">
    </form> -->

    <!-- <form action="meuarq.php" method="get">
        Número: <input type="number" name="num" id="num"><br>

        <fieldset><legend>Operação</legend>

            <input type="radio" name="oper" id="dobro" value="1" checked>
            <label for="dobro">Dobro</label>

            <input type="radio" name="oper" id="cubo" value="2">
            <label for="cubo">Cubo</label>

            <input type="radio" name="oper" id="raiz" value="3">
            <label for="raiz">Raiz Quadrada</label>     
    
        </fieldset>
        
        <input type="submit" value="Calcular">
    </form> -->

    <!-- <form action="meuarq.php" method="get">
        Nota 1: <input type="number" name="n1" id="n1" placeholder="N1"><br>
        Nota 2: <input type="number" name="n2" id="n2" placeholder="N2"><br>
        <input type="submit" value="Calcular Média"> 
    </form> -->

    <!-- <h1>
        Eleições:
    </h1>

    <form action="meuarq.php" method="get">
        Ano de nascimento: <input type="number" name="ano" id="ano" placeholder="aaaa">
        <input type="submit" value="Verificar">
    </form> -->
    
</body>
</html>