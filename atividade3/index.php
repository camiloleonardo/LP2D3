<?php 
include 'Produto.php';

$produtos = [
    new Produto("Pendrive ", 39.99),
    new Produto("Mouse ", 129.99),
    new Produto("Processador AMD", 839.99),
    new Produto("HeadSet", 219.99),

];

exibirProdutos($produtos);

?>