<?php

$conexao = mysqli_connect('localhost', 'root', '', 'banco', '3306');
if(!$conexao){
	die('Sistema em manutenção');
}

?>