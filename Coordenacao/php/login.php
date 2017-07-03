<?php
	session_start();
	include "conexao.php";

	$login=$_POST['matricula'];
	$senha=$_POST['senha'];
	$tipo=$_POST['radio'];

$select_stmt = $pdo->prepare("SELECT USER_MATRICULA, USER_LOGIN, USER_SENHA FROM ps_user WHERE USER_MATRICULA = ? OR USER_LOGIN =? OR USER_SENHA = ? ");
$select_stmt->execute(array($login, $login, $senha));

if(count($select_stmt->fetchAll())>0){
	$buscarusuario = $pdo->prepare("SELECT * FROM PS_USER WHERE USER_LOGIN = '$login'");
	$buscarusuario->execute();
	$mostrar = $buscarusuario->fetch(PDO::FETCH_ASSOC);
	header("location:Listagem.php");
}else{
	$_SESSION['error'] = 1;
	header("location:index.php");
}
?>