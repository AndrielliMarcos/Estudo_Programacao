<?php
require __DIR__.'/vendor/autoload.php';

use \App\Entity\Cliente;

$cliente = Cliente::getCliente();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/list.php';
include __DIR__.'/includes/listAtivos.php';
include __DIR__.'/includes/footer.php';