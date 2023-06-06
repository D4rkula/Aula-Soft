<?php

session_start();

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
		<h1>Hewwo owo, <?php 
					if(isset($_SESSION['nome_usuario']) == null) { ?>
						Visitante ¬w¬</h1>
						<a href="login.php">Login :3c</a><br>
					<?php } else {
						echo $_SESSION['nome_usuario']; ?>
					</h1>
					<a href="cadastro.php">Cadastrar owo</a><br>
					<a href="listar.php">Listar Usuários uwu</a><br>
					<a href="alterar.php">Alterar Senha :3</a><br>
					<a href="sair.php">Sair x3</a>
					<?php 
				} ?>
	</center>
</body>
</html>