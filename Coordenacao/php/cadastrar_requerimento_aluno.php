<?php
	require_once 'conexao.php';
            session_start();
    $matricula = $_POST['matricula'];
    $curso = $_POST['curso'];
    $data = $_POST['dataini'];
    $qdias = $_POST['numero'];

    $rot= $pdo->query("SELECT * FROM PS_USER WHERE USER_MATRICULA = '$matricula'");

    if($rot > 0){
        $ret= $pdo->exec("INSERT INTO PS_FALTAS_ALUNOS (FAL_USER_MATRICULA, FAL_CURSO, FAL_DATA_INICIAL, FAL_DURACAO) VALUES ('$matricula', '$curso', '$data', '$qdias')");
        //header("Location: {$_SERVER['HTTP_REFERER']}");
    }
    // redireciona para a página anterior
    //header("Location: {$_SERVER['HTTP_REFERER']}");
        if ($ret > 0) {
                if (!isset($_SESSION['cadastro'])) {
                    $_SESSION['cadastro'] = $ret;
                    header("location: form_requerimento_aluno.php");
            }
            }else{
                if (!isset($_SESSION['erro'])) {
                    $_SESSION['erro'] =  $ret;
                    header("location: form_requerimento_aluno.php");
                }
            }

?>

