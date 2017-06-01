
<?php
	require_once 'conexao.php';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$funcao = $_POST['tipo'];
		$ret = $pdo->exec("INSERT INTO ps_user (user_name, user_email, user_matricula, user_tipo) VALUES('$nome', '$email', '$matricula', '$funcao') ");
	
// redireciona para a página anterior
 header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>