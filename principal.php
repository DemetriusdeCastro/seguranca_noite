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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<center>
		<?php
		if ($nivel < 3) { ?>
		<a href="addusuario.php">Adicionar Usuário</a> | 
		<?php }
			if ($nivel == 1) { ?>
			<a href="mudaracesso.php">Mudar Acesso</a>
		<?php } ?> | 
		<a href="alterardados.php">Alterar Dados</a>
		<br>
		<a href="logout.php">Sair</a>
	</center>
</body>
</html>