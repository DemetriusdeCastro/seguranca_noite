<?php

if(!isset($_SESSION)) {
	session_start();
}

if($_SESSION['nivel'] <> 1) {
	header('Location: aviso.php');
}

?>