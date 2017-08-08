<?php
	require_once 'conexao.php';
	session_start();

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$login = $_POST['login'];
	$matricula = $_POST['matricula'];
	$senha = $_POST['senha'];
	$funcao = strtoupper($_POST['tipo']);
	$siap = $_POST['SIAP'];
	$cpf = $_POST['CPF'];

	$ret = $pdo->exec("INSERT INTO PS_USER (USER_NOME, USER_EMAIL, USER_LOGIN, USER_MATRICULA, USER_SENHA, USER_TIPO, USER_SIAP, USER_CPF) VALUES ('$nome', '$email', '$login', '$matricula', '$senha', '$funcao', '$siap', '$cpf')");
 	//header("Location: {$_SERVER['HTTP_REFERER']}");

	if ($ret > 0) {
		if (!isset($_SESSION['cadastro'])) {
			$_SESSION['cadastro'] = $ret;
			header("location: user_form.php");
		}
	}else{
	 	if (!isset($_SESSION['erro'])) {
	 		$_SESSION['erro'] =  $ret;
	 		header("location: user_form.php");
	 	}
	}
?>
