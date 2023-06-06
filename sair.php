<?php

session_start();
$_SESSION['nome_usuario'] = null;
session_destroy();
header('Location: index.php');

?>