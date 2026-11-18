<?php
class Livro{
    public function __construct($autor, $titulo, $paginas){
        $this->autor = $autor;
        $this->titulo = $titulo;
        $this->pagina = $paginas;
    }
    public function exibirInformacoes(){
        echo "Autor: " . $this->autor . ", Titulo: " . $this->titulo . ", Paginas: " . $this->pagina;
    }
}
$livro = new Livro ('Samuel Portela', 'O astra perfeito', 500);
$livro->exibirInformacoes();
?>