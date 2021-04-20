<?php
require __DIR__.'/vendor/autoload.php';

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
if(isset($_POST['excluir'])):
       
    $cliente->delete();

    header('location: index.php');
    exit;
endif;

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/confirmar-exclusao.php';
include __DIR__.'/includes/footer.php';

