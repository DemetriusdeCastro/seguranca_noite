<?php

session_start();

include('conexao.php');
include('validaradmin.php');

$cpf = isset($_POST['cpf']) ? $_POST['cpf'] : '';
$nivel = isset($_POST['nivel']) ? $_POST['nivel'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';

if($nivel <> 0) {
	$updatelogin = "UPDATE login SET nivel = '$nivel' WHERE cpf = '$cpf'";
	$querylogin = mysqli_query($conexao, $updatelogin);
}

$updateusuario = "UPDATE usuario SET telefone = '$telefone' WHERE cpf = '$cpf'";
$queryusuario = mysqli_query($conexao, $updateusuario);

header('Location: chamausuario.php?cod='.$cpf);

?>