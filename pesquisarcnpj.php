<?php

session_start();

include('validarlogin.php');

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
		<h1>Pesquisar CNPJ</h1>
		<form id="pesquisarcnpj" action="autenticacnpj.php" method="POST">
			CNPJ:
			<input type="text" name="cnpj" required><br>
			<input type="submit" name="pesquisar" value="Pesquisar">
		</form>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>