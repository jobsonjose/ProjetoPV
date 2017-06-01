
<?php
	require_once 'conexao.php';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$funcao = strtoupper($_POST['tipo']);
		if ($funcao == "ALUNO") {
			$ret = $pdo->exec("INSERT INTO PS_ALUNO () ");
			
		}
		if (!$ret) {
			print_r($pdo->errorInfo());

		}else{
 	header("Location: {$_SERVER['HTTP_REFERER']}");
			
		}
// redireciona para a página anterior
	exit;
?>