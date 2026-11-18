<?php
class notificação{
    protected string $mensagem;

    public function enviarMensagem($mensagem){
        $this->mensagem = $mensagem;
    }

    public function exibirInformacoes(){
        echo "Mnesagens: " . $this->mensagem . "<br>";
    }
}

?>