<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','Cadastrar Cliente');

use \App\Entity\Cliente;

if(isset($_POST['nome'], $_POST['cpf'], $_POST['endereco'], $_POST['celular'], $_POST['ativo'])):
    
    $cliente = new Cliente();

    $cliente->nome = $_POST['nome'];
    $cliente->cpf = $_POST['cpf'];
    $cliente->endereco = $_POST['endereco'];
    $cliente->celular = $_POST['celular'];
    $cliente->ativo = $_POST['ativo'];

    $cliente->create();

    header('location: index.php');
    exit;
endif;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';

