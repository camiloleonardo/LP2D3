<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela Cadastro</title>
</head>
<body>
    <form action="main.php" method="POST" class="login">
        <h2>Cadastrar Usuario</h2>
        <div class="box-user" >
            <input type="text" name="nome" required maxlength="30">
            <label for="">Nome</label>
        </div>
        <div class="box-user" >
            <input type="email" name="email" required maxlength="40">
            <label for="">Email</label>
        </div>
        <div class="box-user">
            <input type="password" name="senha" required maxlength="32" >
            <label for="">Senha</label>
        </div>
        <div class="box-user">
            <input type="password" name="confsenha" required maxlength="32">
            <label for="">Confirmar senha</label>
        </div>
        <div>
        <input type="submit" name="entrar" class="btn" value="CADASTRAR"/>
        </div>
    </form>

    include 'Usuario.php';
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $usuario = new Usuario($nome, $email, $senha);

    echo "<br>usuario = ".$usuario->get_nome()."<br>";
    echo "email = ".$usuario->get_email()."<br>";
    echo "senha = ".$usuario->get_senha()."<br>";

    $usuario->cadastrar($nome,$email,$senha);
}
?>
</body>
</html>