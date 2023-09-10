<?php 
    class Curso{
        private $nome;
        private $link;

        function __construct($nome,$link)
    {
        $this->nome = $nome;
        $this->link = $link;
    }
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_nome(){
        return $this->nome;
    }
    function set_link($link){
        $this->link = $link;
    }
    function get_link(){
        return $this->link;
    }
    
}

function exibirCursos($cursos) {
    echo "Cursos do YouTube:\n";
    echo "<hr>";
    foreach ($cursos as $curso) {
        echo "Nome do curso: " . $curso->get_nome() . "<br>";
        echo "Link do curso: <a href='" . $curso->get_link() . "'>" . $curso->get_link() . "</a><br>";
    }
}
