<?php
class ContaBanco(){
    private string $titular;
    Private float $saldo;

    public function __construct($titular, $saldo){
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
    public function getSaldo(){
        return $this->saldo; 
    }
     public function getTitular(){
        return $this->titular; 
    }
    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
    }
    public function sacar($valor){
        this->saldo = $this->saldo - $valor;
    }
    public function exibirSaldo(){
        echo 'Titular: ' . $this-> titular . " Saldo atual R$: " . number_format($this->saldo, 2, ",", "." )
    }
}

$conta = new ContaBancaria("Samuel", 2000);

$conta->depositar(1000);
$conta->sacar(500);
$conta->exibirSaldo();
?>