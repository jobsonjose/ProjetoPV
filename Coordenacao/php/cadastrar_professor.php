<?php
	require_once 'conexao.php';
      session_start();

  $matricula = $_POST['matricula'];
  $data = $_POST['dataaula'];
  $horario = $_POST['horario'];
  $dis = $_POST['disciplina'];

  $rot= $pdo->query("SELECT USER_MATRICULA FROM PS_USER WHERE USER_MATRICULA = '$matricula'");
  $result = $rot->fetchAll();
  
  echo $result["USER_MATRICULA"][0];

  if ($result[0]['USER_MATRICULA'][0] > 0) {
      $ret = $pdo->exec("INSERT INTO PS_FALTAS_PROFESSOR (FAP_USER_MATRICULA, FAP_DATA, FAP_HORARIO, FAP_DIS) VALUES('$matricula', '$data', '$horario', '$dis')");
              if (!isset($_SESSION['cadastro'])) {
                $_SESSION['cadastro'] = $ret;
                var_dump($ret);
             header("location: form_faltas_professor.php");
      }
}else{
      if (!isset($_SESSION['erro'])) {
            $_SESSION['erro'] =  "Matricula errada ";
         header("location: form_faltas_professor.php");

  }
}

?>

