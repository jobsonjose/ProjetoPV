<?php
	session_start();
	if (isset($_SESSION['cadastro'])) {
 	?>
 	<div class="alert alert-success" id="center">Cadastro realizado com <strong>Sucesso</strong></div>
<?php
	session_destroy();
	}
	if (isset($_SESSION['erro'])) {

 ?>
	<div class="alert alert-danger" id="center">Erro ao tentar Cadastar, <strong>Por favor Tente mais tarde</strong></div>
<?php
	session_destroy();
	}
 ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Coordenação do Curso Técnico em Informática para Internet - IFPE -Campus Igarassu</title>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
		<?php include 'estilos.php';
		?>

	</head>
	<body>
		<?php include 'menulateral.php';
		?>

		<div class="formulario">
			<h2>Cadastro de Usuário</h2>
			<form action="user_action.php" method="post" >
				<label for="nome">Nome</label>
				<input type="text" name="nome" />
				<label for="aluno">Matrícula</label>
				<input type="text" name="matricula"/>
				<label for="date">Email:</label><br>
				<input type="email" name="email"/>
				<select name="tipo">
					<option value="professor">Professor</option>
					<option value="servidor">Servidor</option>
					<option value="aluno">Aluno</option>
				</select>
				<input type="submit" value="Enviar" name="submit"/>
			</form>
		</div>
		<?php include 'footer.php'
		?>

	</body>
</html>