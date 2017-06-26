<?php
	require_once 'conexao.php';
	session_start();

	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$funcao = strtoupper($_POST['tipo']);

	$ret = $pdo->exec("INSERT INTO PS_USER (USER_NOME, USER_EMAIL, USER_MATRICULA, USER_TIPO) VALUES ('$nome', '$email', '$matricula','$funcao')");
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
