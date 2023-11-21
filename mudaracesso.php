<?php

session_start();

include('conexao.php');
include('validaradmin.php');

$select = "SELECT nome, descricao, nivel.id, login.cpf FROM usuario 
			INNER JOIN login ON usuario.cpf = login.cpf
			INNER JOIN nivel ON nivel.id = nivel";
$queryselect = mysqli_query($conexao, $select);

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
		<table border="1px">
			<tr>
				<td>Nome</td>
			</tr>
			<?php
			while ($linha = mysqli_fetch_row($queryselect)) { ?>
			<tr>
				<td><a href="chamausuario.php?cod=<?php echo $linha[3] ?>"><?php echo $linha[0] ?></a></td>
			</tr>
		<?php } ?>
		</table>
		</form>
		<a href="principal.php">Voltar</a>
	</center>
</body>
</html>