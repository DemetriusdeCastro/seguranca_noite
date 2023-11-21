<?php

session_start();

include('conexao.php');
include('validalogin.php');
include('validaadmin.php');

$select = "SELECT nome, descricao, usuario.cpf 
	FROM usuario
	INNER JOIN login ON login.cpf = usuario.cpf
	INNER JOIN nivel ON nivel.id = nivel";
$query = mysqli_query($conexao, $select);

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
		<form name="mudatipo" action="mudatipo.php" method="POST">
			<table border="1px">
				<tr>
					<td>Nome</td>
					<td>Tipo de Acesso</td>
					<td>Novo Tipo de Acesso</td>
					<td>Alterar</td>
				</tr>
				<?php
				while ($linha = mysqli_fetch_row($query)) {
					?>
					<tr>
						<td><?php echo $linha[0] ?></td>
						<td><?php echo $linha[1] ?></td>
						<td>
							<select name="nivel">
								<option value="1">Administrador</option>
								<option value="2">Gerente</option>
								<option value="3">Usuário</option>
							</select>
						</td>
						<td><input type="submit" name="alterar" value="Alterar">
							<input type="hidden" name="cpf" value="<?php echo $linha[2] ?>">
						</td>
					</tr>
				<?php } ?>
			</table>
		</form>
 	</center>
</body>
</html>