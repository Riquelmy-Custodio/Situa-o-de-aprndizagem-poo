<?php
require_once 'email.php';
require_once 'sms.php';

$email = new Email('trabelho feito', 'Zelda');
$email-> exibirInformacoes();
$email->mostrarEmail();

echo "<br>";

$sms = new Sms('Boa boa',  'llal')
$sms-> exibirInformacoes();
$mostarSms();
?>