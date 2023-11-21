<?php

session_start();

include('validalogin.php');

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Segurança</title>
</head>
<body>
	<center>
		<h1>Olá, Administrador</h1>
		<?php 
		if($_SESSION['nivel'] < 3) { ?>
		<a href="adicionar.php">
		Adicionar usuário</a><br>
		<?php } 
		if ($_SESSION['nivel'] == 1) {
		?>
		<a href="mudaracesso.php">Mudar Tipo de Acesso</a><br>
		<?php } ?>
		<a href="logout.php">Sair</a>
	</center>
</body>
</html>