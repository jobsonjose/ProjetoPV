
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados = array('user_name' => $_POST["nome"], 'user_email' => $_POST["email"], 'user_matricula' => $_POST["matricula"], 'user_tipo' => $_POST["tipo"][0]);
	$insert = $conexao->insert('ps_user', $dados); 
	

// redireciona para a página anterior
header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>