<?php

include('conexao.php');
include('funcoes.php');

$login = isset($_POST['login']) ? $_POST['login'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';

$senhacriptografada = criptografar($senha);

$select = "SELECT login, senha, nivel FROM login 
			WHERE login = '$login' AND senha = '$senhacriptografada'";
$query = mysqli_query($conexao, $select);
$dados = mysqli_fetch_row($query);

if (isset($dados[0]) == $login && isset($dados[1]) == $senha) {
	session_start();
	$_SESSION['login'] = $dados[0];
	$_SESSION['nivel'] = $dados[2];
	$_SESSION['logado'] = true;
	header('Location: principal.php');
} else {
	echo '<script>alert("Usuário ou senha incorretos");
			window.location="index.php";
			</script>';
}

?>