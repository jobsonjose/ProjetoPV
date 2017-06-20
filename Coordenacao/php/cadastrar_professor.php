<?php
	require_once 'conexao.php';

  $matricula = $_POST['matricula'];
  $data = $_POST['dataaula'];
  $horario = $_POST['horario'];
  $dis = $_POST['disciplina'];

  $rot= $pdo->query("SELECT * FROM PS_USER WHERE USER_MATRICULA = '$matricula'");
  
  if ($rot > 0) {
  $ret = $pdo->exec("INSERT INTO PS_FALTAS_PROFESSOR (FAP_USER_MATRICULA, FAP_DATA, FAP_HORARIO, FAP_DIS) VALUES('$matricula', '$data', '$horario', '$dis')");
  print_r($pdo->errorInfo());
  //header("Location: {$_SERVER['HTTP_REFERER']}");
  }
  // redireciona para a página anterior
	//header("Location: {$_SERVER['HTTP_REFERER']}");
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <?php include 'estilos.php';
    ?>

  </head>
  <body>
    <?php include 'menulateral.php';
    ?>

    <?php
   if ($ret > 0) {
      echo "<div  id='center' class='alert alert-success'>";
      echo "Registro executado com <strong>Sucesso</strong>";
      echo "</div>";
    } else {
      echo "<div  id='center' class='alert alert-danger'>";
      echo "Matricula Incorreta. <strong>Tente Novamente </strong>";
      echo "</div>";
    }
    ?>
  </body>
</html>