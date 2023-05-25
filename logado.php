<?php

include('conexao.php');
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = select (nome, login, senha) from login;
where login = 'aluno';

if ($login == $DADOS[1] && $senha == $DADOS[2]) {
    SESSION_START (),
    $_SESSION['nome'] = $DADOS[0];
	HEADER ('location: index.php');
} else {
	HEADER ('location: login.php');
}

?>