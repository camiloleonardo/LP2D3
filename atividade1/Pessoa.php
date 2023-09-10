<?php 
class Pessoa{
    private $nome;
    private $idade;
    private $profissao;

    function __construct($nome,$idade,$profissao)
    {
        $this->nome= $nome;   
        $this->idade = $idade;
        $this->profissao = $profissao;
    }

    function setNome($nome){
        $this->nome = $nome;
    }
    function getNome(){
        return $this->nome;
    }
    function setIdade($idade){
        $this->idade = $idade;
    }
    function getIdade(){
        return $this->idade;
    }


    function setProfissao($profissao){
        $this->profissao = $profissao;
    }
    function getProfissao(){
       return  $this->profissao;
    }

    public function apresentar() {
        return "Olá, meu nome é {$this->nome}, tenho {$this->idade} anos e sou {$this->profissao}.<br>";
        
    }

}


?>
