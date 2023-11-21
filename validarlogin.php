<?php

if(!isset($_SESSION)) { 
  session_start(); 
}

if($_SESSION['logado'] == false){
	header('Location: index.php');
}

?>