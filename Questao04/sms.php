<?php
require_once 'notificacao.php';

class sms extends notificacao{
    private string $sms;

     public function __construct($mensagem, $sms){
        parent:: __construct($mensagem);
        $this->sms = $sms;
    }

    public function mostarSms(){
        echo 'Sms recebido: ' . $this->sms;
    }
}

?>