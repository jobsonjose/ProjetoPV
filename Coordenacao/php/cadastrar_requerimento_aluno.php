
<?php
	require_once 'conexao.php';
	$conexao = new Conexao(DB_SERVER, DB_NAME, DB_USERNAME, DB_PASSWORD);
	$dados = array('alu_nome' => $_POST["nome"], 'alu_curso' => $_POST["curso"], 'alu_matricula' => $_POST["matricula"], 'alu_dataini' => $_POST["dataini"], 'alu_datafin' => $_POST["datafin"]);
	$insert = $conexao->insert('portaservi_alunos', $dados); 
	
// redireciona para a página anterior
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>