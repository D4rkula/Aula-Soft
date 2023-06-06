<?php

include('conexao.php');

$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$insert = "INSERT INTO login (nome, login, senha)
			VALUES ('$nome', '$login', '$senha')";
$query = mysqli_query($conexao, $insert);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		Cadastro executado com sucesso >w< <br><br>
		<a href="index.php">Voltar</a>
	</center>
</body>
</html>