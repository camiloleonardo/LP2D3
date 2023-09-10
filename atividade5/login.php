<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Login</title>
</head>
<body>
    <form action="main.php" method="POST" class="login">
        <h2>Login</h2>
        <div class="box-user" >
            <input type="email" name="email" required >
            <label for="">Email</label>
        </div>
        <div class="box-user">
            <input type="password" name="senha" required >
            <label for="">Senha</label>
        </div>
        <div>
        <input type="submit" name="entrar" class="btn" value="Entrar"/>
        </div>
    </form>
</body>
</html>