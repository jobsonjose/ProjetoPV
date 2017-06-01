<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados_professor = array('prof_nome' => $_POST["nome"], 'prof_disciplina' => $_POST["disciplina"], 'prof_data' => $_POST['dataaula']);
	$insert = $conexao->insert('portaservi_professores', $dados_professor); 
	
// redireciona para a página anterior
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>