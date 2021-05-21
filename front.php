<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversor de moédaS</h1>
    <div class="top">
        <form class="fca" action="dados.php" method="post">
        <input type="text" name="valor">
        <select name="caso">
            <option  value="1">Reais para Dolar</option>
            <option  value="2">Dolar para Reais</option>
            <option  value="3">Euro pra Dolar</option>
            <option  value="4">Dolar para Euro</option>
            <option  value="5">Euro para Reais</option>
            <option  value="6">Reais para Euro</option>
        </select>       
        <input type="submit" name=convert value="Converter">
        </form>
        </div>
</body>
</html>