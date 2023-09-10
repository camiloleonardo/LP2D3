<?php 
    class Produto{
        private $nome;
        private $preco;

        function __construct($nome,$preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }
    function set_preco($preco){
        $this->preco = $preco;
    }
    function get_preco(){
        return $this->preco;
    }
    
}

function exibirProdutos($produtos) {
    echo "Catalogo de Produtos:\n";
    echo "<hr>";
    foreach ($produtos as $produto) {
        echo "Nome do produto: " . $produto->get_nome() . "<br>";
        echo "Preço do produto: R$" . number_format($produto->get_preco(), 2, ',', '.') . "<br>";
        echo "<hr>";
    }
}