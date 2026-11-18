<?php
require_once 'Pessoa.php';

class Aluno extends Pessoa{
    private string $curso;

     public function getCurso(){
        return $this->curso; 
    }

    public function __construct($nome, $idade, $curso){
        parent:: __construct($nome, $idade);
        $this->curso = $curso;
    }

    public function mostrarAluno(){
        echo "Curso: " . $this->curso . "<br>";
    }
}

?>