<?php
require_once "notificacao.php";

class email extends notificacao{
    private string $email;

    public function __construct($mensagem, $email){
        parent:: __construct($mensagem);
        $this->email = $email;
    }
    public function mostrarEmail(){
        echo 'Email recebido: ' . $this->email . "<br>";
    }
}
?>