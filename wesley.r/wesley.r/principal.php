<?php

session_start();

include('conexao.php');
include('validarlogin.php');

$nivel = $_SESSION['nivel'];


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
</head>
<body>
	<center>
		<a href="addusuario.php">Adicionar Usuário</a> / 
        <?php
        if ($nivel == 1) { ?>
        <a href="mudaracesso.php"> Mudar Acesso</a>
        <?php } ?>
        <br>
        <a href="logout.php">Sair</a>
	</center>
</body>
</html>