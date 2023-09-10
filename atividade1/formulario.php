<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="post">
        <div class="h-input">
            <label for="nome">Nome:</label>
            <br>
            <input type="text" id="nome" name="nome" placeholder="Digite seu nome" >
            <br><br>

            <label for="idade">Idade:</label>
            <br>
            <input type="number" id="idade" name="idade" placeholder="Digite sua idade" max ="110" min="0" > 
            <br><br>

            <label for="nome">Profissão:</label>
            <br>
            <input type="text" id="profissao" name="profissao" placeholder="Digite sua profissao" >
            <br><br>
        </div>

        <div class="input-botao">
            <input type="submit" name="Entrar" value="Entrar">
        </div>

    </form>
   
</body>
</html>