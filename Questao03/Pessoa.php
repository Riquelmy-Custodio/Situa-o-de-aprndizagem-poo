<?php
class Pessoa{
    protected string $nome;
    private float $idade;

    public function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idae = $idade;
    }
    public function getIdade(){
        return $this->idade;
    }
}
 public function exibirDados(){
    echo "Nome: " . $this->nome . "Idade: " . $this->idade;
    }


?>