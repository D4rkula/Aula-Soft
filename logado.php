<?php

include('conexao.php');
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$select = "SELECT nome, login, senha FROM login 
			WHERE login = '$login' AND senha = '$senha'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

if ($login == $DADOS[1] && $senha == $DADOS[2]) {
    SESSION_START (),
    $_SESSION['nome'] = $DADOS[0];
	HEADER ('location: index.php');
} else {
	HEADER ('location: login.php');
}

?>
