<?php

session_start();

include('conexao.php');
include('funcoes.php');

$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$confirmasenha = isset($_POST['confirmasenha']) ? $_POST['confirmasenha'] : '';

if($senha <> $confirmasenha) {
	echo '<script>alert("Senha e confirmação são diferentes");
		window.location="alterardados.php";</script>';
} else {
	$cpf = $_SESSION['cpf'];
	$senhacriptografada = criptografar($senha);
	$update = "UPDATE login SET senha = '$senhacriptografada' WHERE cpf = '$cpf'";
	$query = mysqli_query($conexao, $update);
	echo '<script>alert("Senha alterada com sucesso");
		window.location="alterardados.php";</script>';
}

?>