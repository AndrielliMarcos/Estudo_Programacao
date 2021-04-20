<?php
require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar Cliente');

use \App\Entity\Cliente;

//validando id
if(!isset($_GET['id']) or !is_numeric($_GET['id'])):
    header('location: index.php');
    exit;
endif;

//consultando o cliente
$cliente = Cliente::getClienteForId($_GET['id']);

//validando cliente
if(!$cliente instanceof Cliente):
    header('location: index.php');
    exit;
endif;

//validando POST     
if(isset($_POST['nome'], $_POST['cpf'], $_POST['endereco'], $_POST['celular'], $_POST['ativo'])):
    
    $cliente->nome = $_POST['nome'];
    $cliente->cpf = $_POST['cpf'];
    $cliente->endereco = $_POST['endereco'];
    $cliente->celular = $_POST['celular'];
    $cliente->ativo = $_POST['ativo'];
    
    $cliente->update();

    header('location: index.php');
    exit;
endif;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';

