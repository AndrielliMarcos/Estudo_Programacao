<?php
/*
    REGRAS PARA USUÁRIOS:
    Perfil administrativo visualiza todos os chamados
    Perfil de usuário visualiza apenas o próprio chamado
*/


//pegando os dados digitados
/*echo $_POST['email'];
echo '<br/>';
echo $_POST['senha'];*/

//iniciar uma sessão
session_start();

//variavel que verifica se a autenticação foi realizada
$usuario_autenticado = false; //ele só será true se as credenciais forem verdadeiras
$usuario_id = null;
$usuario_perfil_id = null;

$perfis = array(1 => 'Administrativo', 2 => 'Usuario');

//neste caso, não usaremos banco de dados. Por isso os usuários serão estáticos
//usuários do sistema 
$usuarios_app = array(
    array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 2, 'email' => 'user@teste.com.br', 'senha' => '1234', 'perfil_id' => 1),
    array('id' => 3, 'email' => 'jose@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
    array('id' => 4, 'email' => 'maria@teste.com.br', 'senha' => '1234', 'perfil_id' => 2),
);

foreach ($usuarios_app as $user) {
   if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
       $usuario_autenticado = true;
       $usuario_id = $user['id'];
       $usuario_perfil_id = $user['perfil_id'];
   }
}

if($usuario_autenticado){
    echo 'Usuario autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['id'] = $usuario_id; //pegando o id do usuário autenticado
    $_SESSION['perfil_id'] = $usuario_perfil_id;
    header('Location: home.php');
} else {
    $_SESSION['autenticado'] = 'NÃO';
    header('Location: index.php?login=erro');    
}

