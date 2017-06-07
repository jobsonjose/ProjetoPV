
<?php
	require_once 'conexao.php';
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$matricula = $_POST['matricula'];
	$funcao = strtoupper($_POST['tipo']);
		if ($funcao == "ALUNO") {

			$ret = $pdo->exec("INSERT INTO PS_ALUNO (ALN_NOME, ALN_EMAIL, ALN_MATRICULA) VALUES ('$nome', '$email', '$matricula')");
			var_dump($ret);
			print_r($pdo->errorInfo());
 			//header("Location: {$_SERVER['HTTP_REFERER']}");

		}elseif ($funcao == "SERVIDOR") {
			$ret = $pdo->exec("INSERT INTO PS_SERVIDOR (SER_NOME, SER_EMAIL, SER_SIAPE) VALUES ('$nome', '$email', '$matricula')");
			//	var_dump($ret);
 			//header("Location: {$_SERVER['HTTP_REFERER']}");
		}elseif ($funcao == "PROFESSOR") {
			$ret = $pdo->exec("INSERT INTO PS_PROFESSOR (PRO_NOME, PRO_EMAIL, PRO_SIAPE) VALUES ('$nome', '$email', '$matricula')");
			//	var_dump($ret);
 			//header("Location: {$_SERVER['HTTP_REFERER']}");

		}

?>
<!DOCTYPE html>
	<html>
	<head>
			<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
			<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />

			<?php include 'estilos.php'; ?>

		</head>
		<body>
			<?php include 'menulateral.php'; ?>

			<?php
			if ($ret > 0) {
			        echo "<div  id='center' class='alert alert-success'>";
			        echo "Cadastro realizado com s <strong>Sucesso</strong>";
			        echo "</div>";
			    } else {
			        echo "<div  id='center' class='alert alert-danger'>";
			        echo "Email já cadastrado ou senha <strong>Tente Novamente </strong>";
			        echo "</div>";
			 }
			 ?>



	</body>
	</html>