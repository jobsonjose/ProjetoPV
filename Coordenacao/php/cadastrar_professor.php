<?php
	require_once 'conexao.php';
            $matricula = $_POST['matricula'];
            $data = $_POST['dataaula'];
            $horario = $_POST['horario'];
            $dis = $_POST['disciplina'];
            $rot= $pdo->query("SELECT * FROM PS_ALUNO WHERE ALN_MATRICULA = '$matricula'");
            var_dump($rot);
            if ($rot > 0) {
            $ret = $pdo->exec("INSERT INTO PS_FALTAS_PROFESSOR (FAP_ALN_MATRICULA, FAP_DATA, FAP_HORARIO, FAP_DIS) VALUES('$matricula', '$data', '$horario', '$dis')");
            print_r($pdo->errorInfo());
            var_dump($ret);
              header("Location: {$_SERVER['HTTP_REFERER']}");

            }



// redireciona para a página anterior
	header("Location: {$_SERVER['HTTP_REFERER']}");
	exit;
?>