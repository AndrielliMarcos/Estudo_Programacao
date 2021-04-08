<?php
  session_start();
  //se o usuário não estiver na sessão, ele será redirecionado para página de login
  if(!isset($_SESSION['autenticado']) || $_SESSION['autenticado'] != 'SIM'){
    header('Location: index.php?login=erro2');
  }
