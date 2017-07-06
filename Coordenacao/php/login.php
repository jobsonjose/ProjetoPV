<?php
	session_start();
	include "conexao.php";

	$login=$_POST['sis'];
	$senha=$_POST['senha'];
	$tipo=$_POST['radio'];
	// var_dump($tipo);
		$stmt = $pdo->prepare("SELECT * FROM PS_USER WHERE USER_MATRICULA = ? OR USER_LOGIN = ? AND USER_SENHA = ? AND USER_TIPO = ?");
		$stmt = $pdo->query("SELECT * FROM PS_USER WHERE USER_MATRICULA = '$login' OR USER_LOGIN = '$login' AND USER_SENHA = '$senha' AND USER_TIPO = '$tipo'");
		$res = $stmt->fetchAll();
	var_dump($stmt);
	var_dump($res);
	if(count($res) > 0){
		$_SESSION['user'] = $res[0]['USER_NOME'];
		$_SESSION['alert'] = $_SESSION['user'];
		$_SESSION['tipo'] = $res[0]['USER_TIPO'];
		header('location: home.php');

	}else{
		$_SESSION['error'] = "Error";
		header("location: home.php");
	}
?>