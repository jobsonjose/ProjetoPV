
<?php
	require_once 'conexao.php';
            $matricula = $_POST['matricula'];
            $curso = $_POST['curso'];
            $data = $_POST['dataini'];
            $qdias = $_POST['numero'];

            $rot= $pdo->query("SELECT * FROM PS_ALUNO WHERE ALN_MATRICULA = '$matricula'");
            var_dump($rot);
            if($rot > 0){
                $ret= $pdo->exec("INSERT INTO PS_FALTAS_ALUNOS (FAL_ALN_MATRICULA, FAL_CURSO, FAL_DATA_INICIAL, FAL_DURACAO) VALUES ('$matricula', '$curso', '$data', '$qdias')");
                var_dump($ret);
                 header("Location: {$_SERVER['HTTP_REFERER']}");
            }
// redireciona para a página anterior
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>