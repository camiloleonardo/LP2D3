<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
require("Pessoa.php"); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $profissao = $_POST['profissao'];
    
    $p1 = new Pessoa($nome, $idade, $profissao);

    echo "<p>" . $p1->apresentar() . "</p>";
}
$minSaldo = -10000; 
$maxSaldo = 10000; 
$valorSaldo = rand($minSaldo, $maxSaldo);

if ($valorSaldo < 0) {
    echo "<p>Seu saldo da conta bancária é R$" . $valorSaldo. "
    <p>Veja algumas ofertas para você e alguns cursos:</p>";
    
    echo "<h2>Cursos</h2>";
    echo "<ul>";
    echo "<li>Introdução à Programação - R$ <a href='https://www.youtube.com/curso1'>https://www.youtube.com/curso1</a></li>";
    echo "<li>Desenvolvimento Web com PHP - R$ <a href='https://www.youtube.com/curso2'>https://www.youtube.com/curso2</a></li>";
    echo "<li>Machine Learning Básico - R$ <a href='https://www.youtube.com/curso3'>https://www.youtube.com/curso3</a></li>";
    echo "</ul>";

} else {
    echo "<p>Seu saldo da conta bancária é R$" . $valorSaldo. "
    <p>Veja algumas ofertas para você e alguns cursos:</p>";
    
    echo "<h2>Cursos</h2>";
    echo "<ul>";
    echo "<li>Introdução à Programação - R$ <a href='https://www.youtube.com/curso1'>https://www.youtube.com/curso1</a></li>";
    echo "<li>Desenvolvimento Web com PHP - R$ <a href='https://www.youtube.com/curso2'>https://www.youtube.com/curso2</a></li>";
    echo "<li>Machine Learning Básico - R$ <a href='https://www.youtube.com/curso3'>https://www.youtube.com/curso3</a></li>";
    echo "</ul>";

    echo "<h2>Produtos com desconto</h2>";
    echo "<ul>";
    echo "<li>Produto A - R$ 50</li>";
    echo "<li>Produto B - R$ 75</li>";
    echo "<li>Produto C - R$ 120</li>";
    echo "</ul>";

}

?>
 

   

</body>
</html>
